<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('mn', array (
  'validators' => 
  array (
    'This value should be false.' => 'Энэ утга буруу байх ёстой.',
    'This value should be true.' => 'Энэ утга үнэн байх ёстой.',
    'This value should be of type {{ type }}.' => 'Энэ утга  {{ type }} -н төрөл байх ёстой.',
    'This value should be blank.' => 'Энэ утга хоосон байх ёстой.',
    'The value you selected is not a valid choice.' => 'Сонгосон утга буруу байна.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Хамгийн багадаа {{ limit }} утга сонгогдсон байх ёстой.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Хамгийн ихдээ {{ limit }} утга сонгогдох боломжтой.',
    'One or more of the given values is invalid.' => 'Өгөгдсөн нэг эсвэл нэгээс олон утга буруу байна.',
    'This field was not expected.' => 'Энэ талбар нь хүлээгдэж байсан юм.',
    'This field is missing.' => 'Энэ талбар нь алга болсон байна.',
    'This value is not a valid date.' => 'Энэ утга буруу date төрөл байна .',
    'This value is not a valid datetime.' => 'Энэ утга буруу цаг төрөл байна.',
    'This value is not a valid email address.' => 'И-майл хаяг буруу байна.',
    'The file could not be found.' => 'Файл олдсонгүй.',
    'The file is not readable.' => 'Файл уншигдахуйц биш байна.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл хэтэрхий том байна ({{ size }} {{ suffix }}). Зөвшөөрөгдөх дээд хэмжээ  {{ limit }} {{ suffix }} байна.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Файлын MIME-төрөл нь буруу байна ({{ type }}). Зөвшөөрөгдөх MIME-төрлүүд {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Энэ утга  {{ limit }} юмуу эсвэл бага байна.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Энэ утга хэтэрхий урт байна. {{ limit }} тэмдэгтийн урттай юмуу эсвэл бага байна.',
    'This value should be {{ limit }} or more.' => 'Энэ утга {{ limit }} юмуу эсвэл их байна.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Энэ утга хэтэрхий богино байна. {{ limit }} тэмдэгт эсвэл их байна.',
    'This value should not be blank.' => 'Энэ утга хоосон байж болохгүй.',
    'This value should not be null.' => 'Энэ утга null байж болохгүй.',
    'This value should be null.' => 'Энэ утга null байна.',
    'This value is not valid.' => 'Энэ утга буруу байна.',
    'This value is not a valid time.' => 'Энэ утга буруу цаг төрөл байна.',
    'This value is not a valid URL.' => 'Энэ утга буруу URL байна .',
    'The two values should be equal.' => 'Хоёр утгууд ижил байх ёстой.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл хэтэрхий том байна. Зөвшөөрөгдөх дээд хэмжээ нь {{ limit }} {{ suffix }} байна.',
    'The file is too large.' => 'Файл хэтэрхий том байна.',
    'The file could not be uploaded.' => 'Файл upload хийгдсэнгүй.',
    'This value should be a valid number.' => 'Энэ утга зөвхөн тоо байна.',
    'This value is not a valid country.' => 'Энэ утга үнэн бодит улс биш байна.',
    'This file is not a valid image.' => 'Файл зураг биш байна.',
    'This is not a valid IP address.' => 'IP хаяг зөв биш байна.',
    'This value is not a valid language.' => 'Энэ утга үнэн зөв хэл биш байна .',
    'This value is already used.' => 'Энэ утга аль хэдийнээ хэрэглэгдсэн байна.',
    'The size of the image could not be detected.' => 'Зургийн хэмжээ тогтоогдож чадсангүй.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Зургийн өргөн хэтэрхий том байна ({{ width }}px). Өргөн нь хамгийн ихдээ {{ max_width }}px байх боломжтой.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Зургийн өргөн хэтэрхий жижиг байна ({{ width }}px). Өргөн нь хамгийн багадаа {{ min_width }}px байх боломжтой.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Зургийн өндөр хэтэрхий том байна ({{ height }}px). Өндөр нь хамгийн ихдээ {{ max_height }}px байх боломжтой.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Зургийн өндөр хэтэрхий жижиг байна ({{ height }}px). Өндөр нь хамгийн багадаа {{ min_height }}px байх боломжтой.',
    'This value should be the user\'s current password.' => 'Энэ утга хэрэглэгчийн одоогийн нууц үг байх ёстой.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Энэ утга яг {{ limit }} тэмдэгт байх ёстой.|Энэ утга яг {{ limit }} тэмдэгт байх ёстой.',
    'The file was only partially uploaded.' => 'Файлын зөвхөн хагас нь upload хийгдсэн.',
    'No file was uploaded.' => 'Ямар ч файл upload хийгдсэнгүй.',
    'No temporary folder was configured in php.ini.' => 'php.ini дээр түр зуурын хавтсыг тохируулаагүй байна, эсвэл тохируулсан хавтас байхгүй байна.',
    'Cannot write temporary file to disk.' => 'Түр зуурын файлыг диск руу бичиж болохгүй байна.',
    'A PHP extension caused the upload to fail.' => 'PHP extension нь upload -г амжилтгүй болгоод байна.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Энэ коллекц {{ limit }} ба түүнээс дээш тооны элемент агуулах ёстой.|Энэ коллекц {{ limit }} ба түүнээс дээш тооны элемент агуулах ёстой.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Энэ коллекц {{ limit }} ба түүнээс доош тооны элемент агуулах ёстой.|Энэ коллекц {{ limit }} ба түүнээс доош тооны элемент агуулах ёстой.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Энэ коллекц яг {{ limit }} элемент агуулах ёстой.|Энэ коллекц яг {{ limit }} элемент агуулах ёстой.',
    'Invalid card number.' => 'Картын дугаар буруу байна.',
    'Unsupported card type or invalid card number.' => 'Дэмжигдээгүй картын төрөл эсвэл картын дугаар буруу байна.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Энэ утга үнэн зөв Олон Улсын Банкны Дансны Дугаар (IBAN) биш байна.',
    'This value is not a valid ISBN-10.' => 'Энэ утга үнэн зөв ISBN-10 биш байна.',
    'This value is not a valid ISBN-13.' => 'Энэ утга үнэн зөв ISBN-13 биш байна.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Энэ утга үнэн зөв ISBN-10 юмуу ISBN-13 биш байна.',
    'This value is not a valid ISSN.' => 'Энэ утга үнэн зөв ISSN биш байна.',
    'This value is not a valid currency.' => 'Энэ утга үнэн бодит валют биш байна.',
    'This value should be equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тaй тэнцүү байх ёстой.',
    'This value should be greater than {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -с их байх ёстой.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай тэнцүү юмуу эсвэл их байх ёстой.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Энэ утга {{ compared_value_type }} {{ compared_value }} -тай яг ижил байх ёстой.',
    'This value should be less than {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -с бага байх ёстой.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай ижил юмуу эсвэл бага байх ёстой.',
    'This value should not be equal to {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -тай тэнцүү байх ёсгүй.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Энэ утга {{ compared_value_type }} {{ compared_value }} -тай яг ижил байх ёсгүй.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Зургийн харьцаа хэтэрхий том байна ({{ ratio }}). Харьцаа нь хамгийн ихдээ {{ max_ratio }} байна.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Зургийн харьцаа хэтэрхий жижиг байна ({{ ratio }}). Харьцаа нь хамгийн багадаа {{ min_ratio }} байна.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Зураг дөрвөлжин хэлбэртэй байна ({{ width }}x{{ height }}px). Дөрвөлжин зургууд оруулах боломжгүй.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Зураг хэвтээ байрлалтай байна ({{ width }}x{{ height }}px). Хэвтээ байрлалтай зургууд оруулах боломжгүй.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Зургууд босоо байрлалтай байна ({{ width }}x{{ height }}px). Босоо байрлалтай зургууд оруулах боломжгүй.',
    'An empty file is not allowed.' => 'Хоосон файл оруулах боломжгүй.',
    'The host could not be resolved.' => 'Хост зөв тохирогдоогүй байна.',
    'This value does not match the expected {{ charset }} charset.' => 'Энэ утга тооцоолсон {{ charset }} тэмдэгттэй таарахгүй байна.',
    'This is not a valid Business Identifier Code (BIC).' => 'Энэ утга үнэн зөв Business Identifier Code (BIC) биш байна.',
    'Error' => 'Алдаа',
    'This is not a valid UUID.' => 'Энэ утга үнэн зөв UUID биш байна.',
    'This value should be a multiple of {{ compared_value }}.' => 'Энэ утга {{ compared_value }} -н үржвэр байх ёстой.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Энэ Business Identifier Code (BIC) код нь IBAN {{ iban }} -тай холбоогүй байна.',
    'This value should be valid JSON.' => 'Энэ утга JSON байх ёстой.',
    'This collection should contain only unique elements.' => 'Энэ коллекц зөвхөн давтагдахгүй элементүүд агуулах ёстой.',
    'This value should be positive.' => 'Энэ утга эерэг байх ёстой.',
    'This value should be either positive or zero.' => 'Энэ утга тэг эсвэл эерэг байх ёстой.',
    'This value should be negative.' => 'Энэ утга сөрөг байх ёстой.',
    'This value should be either negative or zero.' => 'Энэ утга сөрөг эсвэл тэг байх ёстой.',
    'This value is not a valid timezone.' => 'Энэ утга үнэн зөв цагийн бүс биш байна.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Энэ нууц үгийн мэдээлэл алдагдсан байх магадлалтай учраас дахин ашиглагдах ёсгүй. Өөр нууц үг ашиглана уу.',
    'This value should be between {{ min }} and {{ max }}.' => 'Энэ утга {{ min }} -с {{ max }} хооронд байх ёстой.',
    'This form should not contain extra fields.' => 'Форм нэмэлт талбар багтаах боломжгүй.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Upload хийсэн файл хэтэрхий том байна. Бага хэмжээтэй файл оруулна уу.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token буруу байна. Формоо дахин илгээнэ үү.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
