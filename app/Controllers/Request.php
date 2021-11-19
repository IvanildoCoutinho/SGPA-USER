<?php


namespace App\Controllers;

use abdulmueid\EntityReference\Generator;
use App\Models\Document;
use App\Models\Request_Data;

class Request extends Controller
{
    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function make_request(array $data): void
    {
        $fname = filter_var($data['fname'], FILTER_SANITIZE_STRING);
        $lname = filter_var($data['lname'], FILTER_SANITIZE_STRING);
        $code = filter_var($data['code'], FILTER_VALIDATE_INT);
        $course = filter_var($data['course'], FILTER_SANITIZE_STRING);
        $phone = filter_var($data['phone'], FILTER_VALIDATE_INT);
        $grade = filter_var($data['grade'], FILTER_VALIDATE_INT);
        $doc_id = filter_var($data['doc_id'], FILTER_VALIDATE_INT);

        if (!$fname || !$lname || !$code || !$course || !$phone || !$grade || !$doc_id) {

            return;
        }


        $document = (new Document())->find()->where("id = '$doc_id'")->execute();

        $generator = new Generator();
        $pay_reference = $generator->generateReference(PAY_ENTITY, (int)$document->price);

        $date_withdraw = date_add(new \DateTime('now'), new \DateInterval("P{$document->time}D"))
            ->format("d-m-Y");
        $date_added = date("d-m-Y");

        $request_id = (new \App\Models\Request())->save(compact("doc_id", "date_withdraw", "date_added"))->execute();

        if ($request_id > 0) {

            $request_data_id = (new Request_Data())
                ->save(compact("code", "fname", "lname", "course", "phone", "grade", "pay_reference", "request_id"))
                ->execute();

            if ($request_data_id > 0) {

                echo $this->view->render("docs/invoice",
                        compact("code", "fname", "lname", "course", "phone", "grade",
                            "pay_reference", "request_id", "document", "date_added")
                );

                return;
            }
        }
    }

    public function get(array $data) :void
    {
        $request_id = filter_var($data['request_id'], FILTER_VALIDATE_INT);
        $phone = filter_var($data['phone'], FILTER_VALIDATE_INT);

        //TODO: Add error response
        if (!$request_id || !$phone) {
            echo "Error, not filled";
            return;
        }

        $request = (new \App\Models\Request())->find()->where("id = '$request_id'")->execute();

        if ($request) {

            $request_data = (new Request_Data())->find()
                ->where("request_id = '$request_id' AND phone = '$phone'")->execute();

            // Double check always !!
            if ($request_data) {

                $_SESSION['code'] = $request_id;
                $this->router->redirect("web.track");
                return;
            }
        }

        echo "Error, not found";
    }
}