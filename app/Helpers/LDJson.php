<?php

namespace App\Helpers;

final class LDJson
{
    static function faq($items){
        $template = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => []
        ];
        $itemEntity = [
            "@type" => "Question",
            "name"=> "What is peer-to-peer connection?",
            "acceptedAnswer" => [
                "@type"=> "Answer",
                "text"=> "In peer-to-peer (P2P) connection, a group of computers are linked together with equal permissions and responsibilities for processing data that is not going through a separate server computer. No data is stored and sended to some external servers or starages that is why this network is more appropriate for sensitive corporate data."
            ]
        ];
        foreach ($items as $item){
            $itemEntity['name'] = $item['question'] ?? '';
            $itemEntity['acceptedAnswer']['text'] = $item['answer'] ?? '';
            $template['mainEntity'][] = $itemEntity;
        }
        return '<script type="application/ld+json">'.json_encode($template).'</script>';
    }
}
