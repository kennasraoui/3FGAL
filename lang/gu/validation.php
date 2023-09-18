<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute સ્વીકૃત હોવું જોઈએ.',
    'accepted_if'          => 'જ્યારે :other :value હોય ત્યારે :attribute સ્વીકારવું આવશ્યક છે.',
    'active_url'           => ':Attribute માન્ય URL નથી.',
    'after'                => ':Attribute પછી તારીખ હોવી જોઈએ :તારીખ.',
    'after_or_equal'       => ':Attribute પછી તારીખ કે સમાંતર હોવું જોઈએ :તારીખ.',
    'alpha'                => ':Attribute માત્ર અક્ષરોનો જ સમાવેશ કરી શકે.',
    'alpha_dash'           => ':Attribute માત્ર અક્ષરો, આંકડાઓ, ડેશ અને ની નીચે લીટીનો જ સમાવેશ કરી શકે.',
    'alpha_num'            => ':Attribute માત્ર અક્ષરો તથા આંકડાઓનો જ સમાવેશ કરી શકે.',
    'array'                => ':Attribute ગોઠવણીમાં હોવું જોઈએ.',
    'ascii'                => ':Attribute માં ફક્ત સિંગલ-બાઈટ આલ્ફાન્યૂમેરિક અક્ષરો અને પ્રતીકો હોવા જોઈએ.',
    'before'               => ':Attribute પહેલાં તારીખ હોવી જોઈએ :તારીખ.',
    'before_or_equal'      => ':Attribute પહેલાં તારીખ કે સમાંતર હોવું જોઈએ :તારીખ.',
    'between'              => [
        'array'   => ':Attribute ની વચ્ચે હોવું જોઈએ :min અને :max વસ્તુઓ.',
        'file'    => ':Attribute ની વચ્ચે હોવું જોઈએ :min અને :max કિલોબાઇટ્સ.',
        'numeric' => ':Attribute ની વચ્ચે હોવું જોઈએ :min અને :max.',
        'string'  => ':Attribute ની વચ્ચે હોવું જોઈએ :min અને :max અક્ષરો.',
    ],
    'boolean'              => ':Attribute પ્રવૃત્તિ ક્ષેત્ર ખરું કે ખોટું હોવું જોઈએ.',
    'can'                  => ':Attribute ફીલ્ડમાં અનધિકૃત મૂલ્ય છે.',
    'confirmed'            => ':Attribute પુષ્ટિકરણ બંધબેસતું નથી.',
    'current_password'     => 'પાસવર્ડ ખોટો છે.',
    'date'                 => ':Attribute માન્ય તારીખ નથી.',
    'date_equals'          => ':Attribute સમાંતર તારીખ હોવી જોઈએ :તારીખ.',
    'date_format'          => ':Attribute ગોઠવણ સાથે બંધબેસતું નથી :ગોઠવણ.',
    'decimal'              => ':Attribute માં :decimal દશાંશ સ્થાન હોવા આવશ્યક છે.',
    'declined'             => ':Attribute નકારવા જ જોઈએ.',
    'declined_if'          => 'જ્યારે :other :value હોય ત્યારે :attribute નકારવું આવશ્યક છે.',
    'different'            => ':Attribute અને :other અલગ હોવું જોઈએ.',
    'digits'               => ':Attribute હોવું જોઈએ  :digits અંક.',
    'digits_between'       => ':Attribute વચ્ચે હોવું જોઈએ :min અને :max અંક.',
    'dimensions'           => ':Attribute છબીનું પરિમાણ અમાન્ય છે.',
    'distinct'             => ':Attribute પ્રવૃત્તિ ક્ષેત્રનું નકલી મૂલ્ય છે.',
    'doesnt_end_with'      => ':Attribute નીચેનામાંથી એક સાથે સમાપ્ત થઈ શકે નહીં: :values.',
    'doesnt_start_with'    => ':Attribute નીચેનામાંથી એકથી શરૂ ન થઈ શકે: :values.',
    'email'                => ':Attribute માન્ય ઈમેઈલ એડ્રેસ હોવું જોઈએ.',
    'ends_with'            => ':Attribute નીચેમાંથી એક પ્રમાણે પૂરું થતું હોવું જોઈએ :values.',
    'enum'                 => 'પસંદ કરેલ :attribute અમાન્ય છે.',
    'exists'               => 'પસંદ કરાયેલ :attribute અમાન્ય છે.',
    'file'                 => ':Attribute એક ફાઈલ હોવી જોઈએ.',
    'filled'               => ':Attribute પ્રવૃત્તિ ક્ષેત્રનું મૂલ્ય હોવું જોઈએ.',
    'gt'                   => [
        'array'   => ':Attribute ના કરતાં વિશેષ :value વસ્તુઓ.',
        'file'    => ':Attribute થી વિશેષ હોવું જોઈએ :value કિલો બાઇટ્સ.',
        'numeric' => ':Attribute થી વિશેષ હોવું જોઈએ :value.',
        'string'  => ':Attribute થી વિશેષ હોવું જોઈએ :value મૂલ્ય અક્ષરો.',
    ],
    'gte'                  => [
        'array'   => ':Attribute હોવું જોઈએ :value વસ્તુઓ કે વિશેષ.',
        'file'    => ':Attribute થી વિશેષ અથવા સમાંતર હોવું જોઈએ :value કિલો બાઇટ્સ.',
        'numeric' => ':Attribute થી વિશેષ અથવા સમાંતર હોવું જોઈએ :value.',
        'string'  => ':Attribute થી વિશેષ અથવા સમાંતર હોવું જોઈએ :value મૂલ્ય અક્ષરો.',
    ],
    'image'                => ':Attribute છબી હોવી જોઈએ.',
    'in'                   => ':Attribute અમાન્ય છે.',
    'in_array'             => ':Attribute માં પ્રવૃત્તિ ક્ષેત્ર અસ્તિત્વ ધરાવતું નથી :other.',
    'integer'              => ':Attribute પૂર્ણ સંખ્યા હોવી જોઈએ.',
    'ip'                   => ':Attribute માન્ય IP address હોવું જોઈએ.',
    'ipv4'                 => ':Attribute માન્ય IPv4 address હોવું જોઈએ.',
    'ipv6'                 => ':Attribute માન્ય IPv6 address હોવું જોઈએ.',
    'json'                 => ':Attribute માન્ય JSON શબ્દમાળા હોવી જોઈએ.',
    'lowercase'            => ':Attribute લોઅરકેસ હોવું આવશ્યક છે.',
    'lt'                   => [
        'array'   => ':Attribute ઓછું હોવું જોઈએ :value વસ્તુઓ.',
        'file'    => ':Attribute ઓછું હોવું જોઈએ :value કિલો બાઇટ્સ.',
        'numeric' => ':Attribute ઓછું હોવું જોઈએ :value.',
        'string'  => ':Attribute ઓછું હોવું જોઈએ :value અક્ષરો.',
    ],
    'lte'                  => [
        'array'   => ':Attribute ના કરતા વધુ ન હોવું જોઈએ :value વસ્તુઓ.',
        'file'    => ':Attribute ઓછું કે સમાંતર હોવું જોઈએ :value કિલો બાઇટ્સ.',
        'numeric' => ':Attribute ઓછું કે સમાંતર હોવું જોઈએ :value.',
        'string'  => ':Attribute ઓછું કે સમાંતર હોવું જોઈએ :value અક્ષરો.',
    ],
    'mac_address'          => ':Attribute એ માન્ય MAC સરનામું હોવું આવશ્યક છે.',
    'max'                  => [
        'array'   => ':Attribute ના કરતાં વધુ ન હોઈ શકે :max વસ્તુઓ.',
        'file'    => ':Attribute મોટું ન હોઈ શકે :max કિલો બાઇટ્સ.',
        'numeric' => ':Attribute મોટું ન હોઈ શકે :max.',
        'string'  => ':Attribute મોટું ન હોઈ શકે :max અક્ષરો.',
    ],
    'max_digits'           => ':Attribute માં :max થી વધુ અંકો ન હોવા જોઈએ.',
    'mimes'                => ':Attribute પ્રકારની ફાઈલ હોવી જોઈએ :values.',
    'mimetypes'            => ':Attribute પ્રકારની ફાઈલ હોવી જોઈએ :values.',
    'min'                  => [
        'array'   => ':Attribute  હોવું જ જોઈએ :min વસ્તુઓ.',
        'file'    => ':Attribute ઓછામાં ઓછું હોવું જોઈએ :min કિલો બાઇટ્સ.',
        'numeric' => ':Attribute ઓછામાં ઓછું હોવું જોઈએ :min.',
        'string'  => ':Attribute ઓછામાં ઓછું હોવું જોઈએ :min અક્ષરો.',
    ],
    'min_digits'           => ':Attribute માં ઓછામાં ઓછા :min અંકો હોવા જોઈએ.',
    'missing'              => ':Attribute ફીલ્ડ ખૂટે છે.',
    'missing_if'           => 'જ્યારે :other :value હોય ત્યારે :attribute ફીલ્ડ ખૂટે જ જોઈએ.',
    'missing_unless'       => ':Attribute ફીલ્ડ ખૂટે જ જોઈએ સિવાય કે :other :value હોય.',
    'missing_with'         => 'જ્યારે :values હાજર હોય ત્યારે :attribute ફીલ્ડ ખૂટે જ જોઈએ.',
    'missing_with_all'     => 'જ્યારે :values હાજર હોય ત્યારે :attribute ફીલ્ડ ખૂટે જ જોઈએ.',
    'multiple_of'          => ':Attribute એ :value નો ગુણાંક હોવો જોઈએ.',
    'not_in'               => 'પસંદ કરાયેલ :attribute અમાન્ય છે.',
    'not_regex'            => ':Attribute અમાન્ય ગોઠવણ છે.',
    'numeric'              => ':Attribute આંક હોવો જોઈએ.',
    'password'             => [
        'letters'       => ':Attribute માં ઓછામાં ઓછો એક અક્ષર હોવો જોઈએ.',
        'mixed'         => ':Attribute માં ઓછામાં ઓછો એક અપરકેસ અને એક લોઅરકેસ અક્ષર હોવો જોઈએ.',
        'numbers'       => ':Attribute માં ઓછામાં ઓછો એક નંબર હોવો આવશ્યક છે.',
        'symbols'       => ':Attribute માં ઓછામાં ઓછું એક પ્રતીક હોવું આવશ્યક છે.',
        'uncompromised' => 'આપેલ :attribute ડેટા લીકમાં દેખાયા છે. કૃપા કરીને એક અલગ :attribute પસંદ કરો.',
    ],
    'present'              => ':Attribute પ્રવૃત્તિ ક્ષેત્ર હાજર હોવું જોઈએ.',
    'prohibited'           => ':Attribute ફીલ્ડ પર પ્રતિબંધ છે.',
    'prohibited_if'        => 'જ્યારે :other :value હોય ત્યારે :attribute ફીલ્ડ પ્રતિબંધિત છે.',
    'prohibited_unless'    => ':Attribute ફીલ્ડ પ્રતિબંધિત છે સિવાય કે :other :values માં હોય.',
    'prohibits'            => ':Attribute ક્ષેત્ર :other ને હાજર રહેવાથી પ્રતિબંધિત કરે છે.',
    'regex'                => ':Attribute અમાન્ય ગોઠવણ છે.',
    'required'             => ':Attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે.',
    'required_array_keys'  => ':Attribute ફીલ્ડમાં :values માટેની એન્ટ્રીઓ હોવી આવશ્યક છે.',
    'required_if'          => ':Attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે જ્યારે :other છે :value.',
    'required_if_accepted' => 'જ્યારે :other સ્વીકારવામાં આવે ત્યારે :attribute ફીલ્ડ જરૂરી છે.',
    'required_unless'      => ':Attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે સિવાય :other માં છે :values.',
    'required_with'        => ':Attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે જ્યારે :values હાજર હોય.',
    'required_with_all'    => ':Attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે જ્યારે :values હાજર હોય.',
    'required_without'     => ':Attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે જ્યારે :values હાજર ન હોય.',
    'required_without_all' => ':Attribute પ્રવૃત્તિ ક્ષેત્ર આવશ્યક છે જ્યારે કશું પણ :values હાજર હોય.',
    'same'                 => ':Attribute અને :other બંધબેસતું હોવું જોઈએ.',
    'size'                 => [
        'array'   => ':Attribute સમાવેશ કરતું હોવું જોઈએ : કદ વસ્તુઓ.',
        'file'    => ':Attribute હોવું જોઈએ :size કિલો બાઇટ્સ.',
        'numeric' => ':Attribute હોવું જોઈએ :કદ.',
        'string'  => ':Attribute હોવું જોઈએ :size અક્ષરો.',
    ],
    'starts_with'          => ':Attribute નીચેમાંથી કોઈએક વડે શરૂ થતું હોવું જોઈએ :values.',
    'string'               => ':Attribute શબ્દમાળા હોવી જોઈએ.',
    'timezone'             => ':Attribute  માન્ય પરિક્ષેત્ર હોવું જોઈએ.',
    'ulid'                 => ':Attribute એ માન્ય ULID હોવું આવશ્યક છે.',
    'unique'               => ':Attribute પહેલેથી લઈ લેવામાં આવેલ છે.',
    'uploaded'             => ':Attribute અપલોડ થવામાં નિષ્ફળ.',
    'uppercase'            => ':Attribute અપરકેસ હોવા જોઈએ.',
    'url'                  => ':Attribute ગોઠવણ અમાન્ય છે.',
    'uuid'                 => ':Attribute માન્ય UUID હોવું જોઈએ.',
    'attributes'           => [
        'address'                  => 'એડ્રેસ',
        'age'                      => 'વય',
        'amount'                   => 'રકમ',
        'area'                     => 'વિસ્તાર',
        'available'                => 'ઉપલબ્ધ',
        'birthday'                 => 'જન્મદિવસ',
        'body'                     => 'મુખ્ય ભાગ',
        'city'                     => 'શહેર',
        'content'                  => 'સામગ્રી',
        'country'                  => 'દેશ',
        'created_at'               => 'ખાતે બનાવેલ છે',
        'creator'                  => 'સર્જક',
        'current_password'         => 'અત્યારનો પાસવર્ડ',
        'date'                     => 'તારીખ',
        'date_of_birth'            => 'જન્મ તારીખ',
        'day'                      => 'દિવસ',
        'deleted_at'               => 'પર કાઢી નાખ્યું',
        'description'              => 'વર્ણન',
        'district'                 => 'જિલ્લો',
        'duration'                 => 'સમયગાળો',
        'email'                    => 'ઈમેઈલ',
        'excerpt'                  => 'ટૂંકસાર',
        'filter'                   => 'ફિલ્ટર',
        'first_name'               => 'પ્રથમ_નામ',
        'gender'                   => 'જાતિ',
        'group'                    => 'જૂથ',
        'hour'                     => 'કલાક',
        'image'                    => 'છબી',
        'last_name'                => 'અંતિમ_નામ',
        'lesson'                   => 'પાઠ',
        'line_address_1'           => 'લાઇન સરનામું 1',
        'line_address_2'           => 'લાઇન સરનામું 2',
        'message'                  => 'સંદેશ',
        'middle_name'              => 'વચલું નામ',
        'minute'                   => 'મિનિટ',
        'mobile'                   => 'મોબાઈલ',
        'month'                    => 'મહિનો',
        'name'                     => 'નામ',
        'national_code'            => 'રાષ્ટ્રીય કોડ',
        'number'                   => 'સંખ્યા',
        'password'                 => 'પાસવર્ડ',
        'password_confirmation'    => 'પાસવર્ડ_પુષ્ટિકરણ',
        'phone'                    => 'ફોન',
        'photo'                    => 'ફોટો',
        'postal_code'              => 'પોસ્ટ કોડ',
        'price'                    => 'કિંમત',
        'province'                 => 'પ્રદેશ',
        'recaptcha_response_field' => 'recaptcha પ્રતિભાવ ક્ષેત્ર',
        'remember'                 => 'યાદ રાખો',
        'restored_at'              => 'ખાતે પુનઃસ્થાપિત',
        'result_text_under_image'  => 'છબી હેઠળ પરિણામ ટેક્સ્ટ',
        'role'                     => 'ભૂમિકા',
        'second'                   => 'સેકંડ',
        'sex'                      => 'જાતિ',
        'short_text'               => 'ટૂંકું લખાણ',
        'size'                     => 'કદ',
        'state'                    => 'રાજ્ય',
        'street'                   => 'શેરી',
        'student'                  => 'વિદ્યાર્થી',
        'subject'                  => 'વિષય',
        'teacher'                  => 'શિક્ષક',
        'terms'                    => 'શરતો',
        'test_description'         => 'પરીક્ષણ વર્ણન',
        'test_locale'              => 'પરીક્ષણ લોકેલ',
        'test_name'                => 'પરીક્ષણ નામ',
        'text'                     => 'લખાણ',
        'time'                     => 'સમય',
        'title'                    => 'શીર્ષક',
        'updated_at'               => 'પર અપડેટ કર્યું',
        'username'                 => 'વપરાશકર્તા નામ',
        'year'                     => 'વર્ષ',
    ],
];
