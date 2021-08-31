<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute должен быть принят',
    'accepted_if' => ':attribute должен быть принят, когда :other является :value.',
    'active_url' => ':attribute не действительный URL.',
    'after' => ':attribute дата должна быть после :date.',
    'after_or_equal' => ':attribute дата должна быть после или равной :date.',
    'alpha' => ':attribute должен содержать только буквы.',
    'alpha_dash' => ':attribute должен содержать только буквы, цифры, дефисы и символы подчеркивания.',
    'alpha_num' => ':attribute должен содержать только буквы и цифры.',
    'array' => ':attribute должен быть массив.',
    'before' => ':attribute дата должна быть до :date.',
    'before_or_equal' => ':attribute дата должна быть до или равной :date.',
    'between' => [
        'numeric' => ':attribute должно быть между :min и :max.',
        'file' => ':attribute должен быть между :min и :max килобайт.',
        'string' => ':attribute должна быть между :min и :max символов.',
        'array' => ':attribute должн быть между :min и :max элементов.',
    ],
    'boolean' => ':attribute поле может быть true или false.',
    'confirmed' => ':attribute подтверждение не совпадает.',
    'current_password' => 'Неверный пароль.',
    'date' => ':attribute не действительная дата.',
    'date_equals' => ':attribute должна быть дата, равная :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должно быть другим.',
    'digits' => ':attribute должен быть :digits цифра.',
    'digits_between' => ':attribute должно быть между :min и :max цифра.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => ':attribute поле имеет повторяющееся значение.',
    'email' => ':attribute адрес эл. почты должен быть действительным.',
    'ends_with' => ':attribute должен заканчиваться одним из следующих: :values.',
    'exists' => 'выбранный :attribute является недействительным.',
    'file' => ':attribute должен быть файл.',
    'filled' => ':attribute поле должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должно быть больше чем :value.',
        'file' => ':attribute должно быть больше чем :value килобайт.',
        'string' => ':attribute должно быть больше чем :value символов.',
        'array' => ':attribute должно быть больше, чем :value элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должно быть больше или равно :value.',
        'file' => ':attribute должно быть больше или равно :value килобайт.',
        'string' => ':attribute должно быть больше или равно :value символов.',
        'array' => ':attribute должно быть :value или более.',
    ],
    'image' => ':attribute должно быть изображение.',
    'in' => 'выбранный :attribute является недействительным.',
    'in_array' => ':attribute поле не существует в :other.',
    'integer' => ':attribute должно быть целым числом.',
    'ip' => ':attribute должен быть действующий IP-адрес.',
    'ipv4' => ':attribute должен быть действительным IPv4 адрес.',
    'ipv6' => ':attribute должен быть действительным IPv6 адрес.',
    'json' => ':attribute должен быть действительным JSON строка.',
    'lt' => [
        'numeric' => ':attribute должно быть меньше чем :value.',
        'file' => ':attribute должно быть меньше чем :value килобайт.',
        'string' => ':attribute должно быть меньше чем :value символов.',
        'array' => ':attribute должно быть меньше чем :value элементов.',
    ],
    'lte' => [
        'numeric' => ':attribute должно быть меньше чем или равно :value.',
        'file' => ':attribute должно быть меньше чем или равно :value килобайт.',
        'string' => ':attribute должно быть меньше чем или равно :value символов.',
        'array' => ':attribute не должно быть больше, чем :value элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не должно быть больше, чем :max.',
        'file' => ':attribute не должно быть больше, чем :max килобайт.',
        'string' => ':attribute не должно быть больше, чем :max символов.',
        'array' => ':attribute не должно быть больше, чем :max элементов.',
    ],
    'mimes' => ':attribute должен быть файл типа: :values.',
    'mimetypes' => ':attribute должен быть файл типа: :values.',
    'min' => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file' => ':attribute должен быть не менее :min килобайт.',
        'string' => ':attribute должен быть не менее :min символов.',
        'array' => ':attribute должно быть как минимум :min элементов.',
    ],
        'multiple_of' => ':attribute должно быть кратно :value.',
    'not_in' => ' выбранный :attribute недействителен.',
    'not_regex' => 'формат :attribute недействителен',
    'numeric' => ':attribute должен быть числом.',
    'password' => 'Неверный пароль.',
    'present' => 'Поле :attribute должно присутствовать',
    'regex' => 'Формат :attribute недействителен',
    'required' => 'Поле :attribute является обязательным.',
        'required_if' => 'поле :attribute необходимо, когда :other является :value.',
    'required_unless' => 'поле :attribute является обязательным, если только :other в :values.',
    'required_with' => 'Поле :attribute является обязательным при наличии :values.',
    'required_with_all' => ':Поле :attribute является обязательным при наличии :values.',
    'required_without' => 'Поле :attribute является обязательным, когда :values отсутствуют',
    'required_without_all' => 'Поле :attribute является обязательным, если не указано ни одно из :values.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено, когда :other в :value.',
    'prohibited_unless' => 'Поле :attribute запрещено, если :other в :values.',
    'same' => ':attribute и :other должен соответствовать.',
    'size' => [
        'numeric' => ':attribute должен быть :size.',
        'file' => ':attribute должен быть :size килобайт.',
        'string' => ':attribute должен быть :size символов.',
        'array' => ':attribute должен содержать :size элементов.',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих значений: :values.',
    'string' => ':attribute должна быть строка.',
    'timezone' => ':attribute должен быть действительным часовым поясом.',
    'unique' => ':attribute уже используется.',
    'uploaded' => ':attribute не удалось загрузить.',
    'url' => ':attribute должен быть действительным URL.',
    'uuid' => ':attribute должен быть действительным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
