<?php

/**
 *
 */
class Api extends CI_Model
{
    
    function call_api($question){
        $apiKey = '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';
        $url = 'https://api.openai.com/v1/chat/completions';

        $data = array(
            'model' => 'gpt-3.5-turbo',
            'messages' => array(
                array('role' => 'system', 'content' => 'Vous êtes un assistant qui aide les utilisateurs.'),
                array('role' => 'user', 'content' => $question)
            )
        );
        $headers = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        //$response = '{"id":"chatcmpl-7DA8iq89Y8zUpKOcMbILxmq9Lad30","object":"chat.completion","created":1683371596,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":40,"completion_tokens":23,"total_tokens":63},"choices":[{"message":{"role":"assistant","content":"Il est important de noter que les rêves sont souvent très personnels et peuvent avoir différentes significations basées sur l\'expérience personnelle et les émotions du rêveur. Cependant, manger dans une forêt la nuit peut symboliser le besoin de se connecter à la nature et de trouver un sentiment de paix et de calme dans son environnement. Le fait que vous ayez ressenti que le rêve était lucide peut indiquer que vous avez une certaine clarté ou compréhension sur votre vie actuelle et votre relation avec votre partenaire ou à l\'égard d\'une relation future. Globalement, ce rêve peut être interprété positivement en ce sens qu\'il peut refléter un désir d\'harmonie et de bonheur dans une relation future ou actuelle. Cela peut également indiquer une forte connexion spirituelle ou émotionnelle avec votre partenaire."},"finish_reason":"stop","index":0}]}';
        //$response = '{"id":"chatcmpl-7DA8iq89Y8zUpKOcMbILxmq9Lad30","object":"chat.completion","created":1683371596,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":40,"completion_tokens":23,"total_tokens":63},"choices":[{"message":{"role":"assistant","content":"Non, ce n\'est pas un cauchemar"},"finish_reason":"stop","index":0}]}';
        $response = curl_exec($ch); 
        return $response;
    }

    function traitement_response($question){
        $response = $this->call_api($question);
        if($response === false){
            return null;
        }else{
            $responseData = json_decode($response, true);
            $message = $responseData['choices'][0]['message']['content'];
            // var_dump($message);
            return $message;
        }
    }

    function gestion_question($question){
        $arr = array('j\'ai revé que :', $question ,'que signifie ce reve pour mon avenir brievement');
        return join(" ", $arr);
    }

    function gestion_question_cauchemar($question){
        $arr = array('j\'ai revé que :', $question ,'est ce que ceci est un cauchemar. repondez par oui ou non juste.');
        return join(" ", $arr);
    }

}

?>