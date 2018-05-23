<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PhpScience\TextRank\TextRankFacade;
use PhpScience\TextRank\Tool\StopWords\English;
class SummaryController extends Controller
{
    public function viewSummary() {
        $response1 = $this->summary();
        $response2 = $this->summary2();
        $response = array();


        $ii = sizeof($response1);
        for ($i=0; $i < $ii; $i++) { 
            $isi1 = $response1[$i]["summary"];
            $response[] = array("id"=>$response1[$i]["id"], "summary1"=>$isi1);
        }
        $ii = sizeof($response2);
        for ($i=0; $i < $ii; $i++) { 
            $isi2 = $response2[$i]["summary"];
            $id=$response2[$i]["id"];
            $jj = sizeof($response);
            for ($j=0; $j < $jj; $j++) {
                if ($id == $response[$j]["id"]) {
                    $response[$j]["summary2"] = $isi2;
                    $j = $jj;   
                }
            }
        }
        $response = json_encode($response);
        return view('app-review', ['response' => json_decode($response, true)]);
        // return $response;
    }

    public function viewSummary1() {
        $response = $this->summary();
        $response = json_encode($response);
        return view('home', ['response' => json_decode($response, true)]);
    }
    
    public function viewSummary2() {
        $response = $this->summary2();
        $response = json_encode($response);
        return view('home', ['response' => json_decode($response, true)]);
    }

    public function summary2() {
        $texts = DB::select('select * from reviews_concat_cleansing');
        $response = array();
        $final = array();
        $temp = array();
        foreach ($texts as $text) {
            $st = new SummarizerDua();
            $isi_text = $text->text_reviews_concat;
            $result = $st->get_summary($isi_text);
            $final[] = array ("id"=>$text->id_aplikasi, "summary"=> $result);
        }
        return ($final);
    }

    public function summary() {
        // The semicolon, befittingly, symbolizes a wink.';
        $texts = DB::select('select * from reviews_concat_cleansing');

        $response = array();
        $final = array();

        foreach ($texts as $text) {
            $isi_text = $text->text_reviews_concat;
            $api = new TextRankFacade();

            // English implementation for stopwords/junk words:
            $stopWords = new English();
            $api->setStopWords($stopWords);

            // // Array of the most important keywords:
            // $result = $api->getOnlyKeyWords($isi_text);

            // // Array of the sentences from the most important part of the text:
            // $result = $api->getHighlights($isi_text); 
            // // return $result;

            // Array of the most important sentences from the text:
            $result = $api->summarizeTextBasic($isi_text);

            $temp = "";
            foreach ($result as $ii => $value) {
                $temp .= $value . ' ';
            }

            $final[] = array ("id"=>$text->id_aplikasi, "summary"=> $temp);
            // $final[] = array ("id"=>$text->id_aplikasi, "summary"=> $result);
        }
        return $final;
    }
}