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

    public function make_request(array $data) :void {

        $data = filter_var_array($data, FILTER_DEFAULT);

        $fname = filter_var($data['fname'], FILTER_SANITIZE_STRING);
        $lname = filter_var($data['lname'], FILTER_SANITIZE_STRING);
        $code = filter_var($data['code'], FILTER_VALIDATE_INT);
        $course = filter_var($data['course'], FILTER_SANITIZE_STRING);
        $phone = filter_var($data['phone'], FILTER_VALIDATE_INT);
        $grade = filter_var($data['grade'], FILTER_VALIDATE_INT);
        $doc_id = filter_var($data['doc_id'], FILTER_VALIDATE_INT);

        $document = (new Document())->find()->where("id = '$doc_id'")->execute();

        $generator = new Generator();
        $reference = $generator->generateReference(PAY_ENTITY, $document->price);

        $date_withdraw = date_add(new \DateTime('now'), new \DateInterval("P{$document->time}D"))
            ->format("d-m-Y");

        $request_id = (new \App\Models\Request())->save(compact("doc_id", "date_withdraw"))->execute();

        if ($request_id > 0) {

            $request_data_id = (new Request_Data())
                ->save(compact("code","fname", "lname","course", "phone", "grade", "reference", "request_id"))
                ->execute();

            if ($request_data_id > 0) {

                //TODO: Gerar o PDF com detalhes de pagamento


            }
        }
    }


}