<?php

/**
 *
 */
class Chat extends CI_Model
{
    function call_gpt(){
        // $apiKey = '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';
        // $url = 'https://api.openai.com/v1/chat/completions';

        // $data = array(
        //     'model' => 'gpt-3.5-turbo',
        //     'messages' => array(
        //         array('role' => 'system', 'content' => 'Vous êtes un assistant qui aide les utilisateurs.'),
        //         array('role' => 'user', 'content' => 'Qui a remporté la Coupe du Monde de football en 2018?')
        //     )
        // );

        // $headers = array(
        //     'Content-Type: application/json',
        //     'Authorization: Bearer ' . $apiKey
        // );

        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = '{"id":"chatcmpl-7DA8iq89Y8zUpKOcMbILxmq9Lad30","object":"chat.completion","created":1683371596,"model":"gpt-3.5-turbo-0301","usage":{"prompt_tokens":40,"completion_tokens":23,"total_tokens":63},"choices":[{"message":{"role":"assistant","content":"La Coupe du Monde de football en 2018 a été remportée par l équipe de France."},"finish_reason":"stop","index":0}]}';

        if ($response === false) {
            return curl_error($ch);
            // echo 'Erreur lors de la requête : ' . curl_error($ch);
        } else {
            $responseData = json_decode($response, true);
            // echo 'Réponse de l\'API : ' . $responseData['choices'][0]['message']['content'];
        }
        // curl_close($ch);
        return json_decode($response,true);

    }
}

?>