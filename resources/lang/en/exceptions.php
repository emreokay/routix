<?php

use Emreokay\Routix\Enums\{Filter,Parameter};

return [
    'filter_type_not_found' => 'Belirtilen filtre tipi uygun bulunmadı. Filtre tipi şunlar olmalıdır: '.json_encode(Filter::TYPES),
    'key_not_fount' => 'Söz dizimine uygun anahtar bulunamadı.',
    'root_not_found' => 'Routix oluşturmak için en az bir adet kök tanımlaması yapılmalıdır.',
    'root_multiple' => 'Routix oluşturmak için birden fazla kök tanımlaması yapılmalıdır.',
    'parent_not_found' => 'Sınıf tanımlamalarında ebeveyn tanımı mutlaka yapılmalıdır.',
    'name_not_found' => 'Sınıf tanımlamalarında isim tanımı mutlaka yapılmalıdır.',
    'title_not_found' => 'Sınıf tanımlamalarında başlık tanımı mutlaka yapılmalıdır.',
    'description_not_found' => 'Sınıf tanımlamalarında açıklama tanımı mutlaka yapılmalıdır.',
    'text_not_found' => 'Sınıf tanımlamalarında detaylı açıklama tanımı mutlaka yapılmalıdır.',
    'has_root_parent' => 'Sınıf tanımlamalarında kök ve ebeyen tanımlaması aynı anda yapılmamalıdır.',
    'similar_name' => 'Sınıf tanımlamalarında isim tanımı benzersiz olmalıdır.',

    'belongs_not_found' => 'Metod tanımlamalarında aitlik tanımı mutlaka yapılmalıdır.',
    'method_description_not_found' => 'Method tanımlamalarında açıklama tanımı mutlaka yapılmalıdır.',
    'method_parameter_not_found' => 'Method tanımlamalarında parametre tanımlaması mutlaka yapılmalıdır.',
    'method_response_not_found' => 'Method tanımlamalarında response tanımlaması mutlaka yapılmalıdır.',

    'parameter_name_not_found' => 'Parametre tanımlamalarında isim tanımlaması mutlaka yapılmalıdır.',
    'parameter_must_not_found' => 'Parametre tanımlamalarında gereklilik tanımlaması mutlaka yapılmalıdır.',
    'parameter_where_not_found' => 'Parametre tanımlamalarında yerleşim tanımlaması mutlaka yapılmalıdır.',
    'parameter_type_not_found' => 'Parametre tanımlamalarında tip tanımlaması mutlaka yapılmalıdır.',
    'parameter_must_not_supported' => 'Parametre tanımı olarak gereklilik ancak şunları içermelidir. ('.implode(',',Parameter::MUST).')',
    'parameter_where_not_supported' => 'Parametre tanımı olarak yerleşim ancak şunları içermelidir. ('.implode(',',Parameter::WHERE).')',

    'response_http_status_code_not_found' => 'Response tanımlamalarında durum kodu tanımlaması mutlaka yapılmalıdır.',
    'response_example_not_found' => 'Response tanımlamalarında örnek tanımlaması mutlaka yapılmalıdır.',
];
