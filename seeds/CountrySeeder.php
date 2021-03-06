<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $countries = [

            ['id' => 1, 'shortname' => 'AF', 'country' => 'Afghanistan', 'nationality' => 'Afghan', 'phonecode' => 93],
            ['id' => 2, 'shortname' => 'AL', 'country' => 'Albania', 'nationality' => 'Albanian', 'phonecode' => 355],
            ['id' => 3, 'shortname' => 'DZ', 'country' => 'Algeria', 'nationality' => 'Algerian', 'phonecode' => 213],
            ['id' => 4, 'shortname' => 'AS', 'country' => 'American Samoa', 'nationality' => 'American Samoan', 'phonecode' => 1684],
            ['id' => 5, 'shortname' => 'AD', 'country' => 'Andorra', 'nationality' => 'Andorran', 'phonecode' => 376],
            ['id' => 6, 'shortname' => 'AO', 'country' => 'Angola', 'nationality' => 'Angolan', 'phonecode' => 244],
            ['id' => 7, 'shortname' => 'AI', 'country' => 'Anguilla', 'nationality' => 'Anguillan', 'phonecode' => 1264],
            ['id' => 8, 'shortname' => 'AQ', 'country' => 'Antarctica', 'nationality' => 'Antarctican', 'phonecode' => 0],
            ['id' => 9, 'shortname' => 'AG', 'country' => 'Antigua And Barbuda', 'nationality' => 'Antiguans, Barbudans', 'phonecode' => 1268],
            ['id' => 10, 'shortname' => 'AR', 'country' => 'Argentina', 'nationality' => 'Argentinean', 'phonecode' => 54],
            ['id' => 11, 'shortname' => 'AM', 'country' => 'Armenia', 'nationality' => 'Armenian', 'phonecode' => 374],
            ['id' => 12, 'shortname' => 'AW', 'country' => 'Aruba', 'nationality' => 'Aruban', 'phonecode' => 297],
            ['id' => 13, 'shortname' => 'AU', 'country' => 'Australia', 'nationality' => 'Australian', 'phonecode' => 61],
            ['id' => 14, 'shortname' => 'AT', 'country' => 'Austria', 'nationality' => 'Austrian', 'phonecode' => 43],
            ['id' => 15, 'shortname' => 'AZ', 'country' => 'Azerbaijan', 'nationality' => 'Azerbaijani', 'phonecode' => 994],
            ['id' => 16, 'shortname' => 'BS', 'country' => 'Bahamas, The', 'nationality' => 'Bahamians', 'phonecode' => 1242],
            ['id' => 17, 'shortname' => 'BH', 'country' => 'Bahrain', 'nationality' => 'Bahraini', 'phonecode' => 973],
            ['id' => 18, 'shortname' => 'BD', 'country' => 'Bangladesh', 'nationality' => 'Bangladeshi', 'phonecode' => 880],
            ['id' => 19, 'shortname' => 'BB', 'country' => 'Barbados', 'nationality' => 'Barbadian', 'phonecode' => 1246],
            ['id' => 20, 'shortname' => 'BY', 'country' => 'Belarus', 'nationality' => 'Belarusian', 'phonecode' => 375],
            ['id' => 21, 'shortname' => 'BE', 'country' => 'Belgium', 'nationality' => 'Belgian', 'phonecode' => 32],
            ['id' => 22, 'shortname' => 'BZ', 'country' => 'Belize', 'nationality' => 'Belizean', 'phonecode' => 501],
            ['id' => 23, 'shortname' => 'BJ', 'country' => 'Benin', 'nationality' => 'Beninese', 'phonecode' => 229],
            ['id' => 24, 'shortname' => 'BM', 'country' => 'Bermuda', 'nationality' => 'Bermudian', 'phonecode' => 1441],
            ['id' => 25, 'shortname' => 'BT', 'country' => 'Bhutan', 'nationality' => 'Bhutanese', 'phonecode' => 975],
            ['id' => 26, 'shortname' => 'BO', 'country' => 'Bolivia', 'nationality' => 'Bolivian', 'phonecode' => 591],
            ['id' => 27, 'shortname' => 'BA', 'country' => 'Bosnia and Herzegovina', 'nationality' => 'Bosnian, Herzegovinian', 'phonecode' => 387],
            ['id' => 28, 'shortname' => 'BW', 'country' => 'Botswana', 'nationality' => 'Motswana/Batswana', 'phonecode' => 267],
            ['id' => 29, 'shortname' => 'BV', 'country' => 'Bouvet Island', 'nationality' => null, 'phonecode' => 0],
            ['id' => 30, 'shortname' => 'BR', 'country' => 'Brazil', 'nationality' => 'Brazilian', 'phonecode' => 55],
            ['id' => 31, 'shortname' => 'IO', 'country' => 'British Indian Ocean Territory', 'nationality' => null, 'phonecode' => 246],
            ['id' => 32, 'shortname' => 'BN', 'country' => 'Brunei', 'nationality' => 'Bruneian', 'phonecode' => 673],
            ['id' => 33, 'shortname' => 'BG', 'country' => 'Bulgaria', 'nationality' => 'Bulgarian', 'phonecode' => 359],
            ['id' => 34, 'shortname' => 'BF', 'country' => 'Burkina Faso', 'nationality' => 'Burkinabe', 'phonecode' => 226],
            ['id' => 35, 'shortname' => 'BI', 'country' => 'Burundi', 'nationality' => 'Burundian', 'phonecode' => 257],
            ['id' => 36, 'shortname' => 'KH', 'country' => 'Cambodia', 'nationality' => 'Cambodian', 'phonecode' => 855],
            ['id' => 37, 'shortname' => 'CM', 'country' => 'Cameroon', 'nationality' => 'Cameroonian', 'phonecode' => 237],
            ['id' => 38, 'shortname' => 'CA', 'country' => 'Canada', 'nationality' => 'Canadian', 'phonecode' => 1],
            ['id' => 39, 'shortname' => 'CV', 'country' => 'Cape Verde', 'nationality' => 'Cape Verdian', 'phonecode' => 238],
            ['id' => 40, 'shortname' => 'KY', 'country' => 'Cayman Islands', 'nationality' => 'Caymanian', 'phonecode' => 1345],
            ['id' => 41, 'shortname' => 'CF', 'country' => 'Central African Republic', 'nationality' => 'Central African', 'phonecode' => 236],
            ['id' => 42, 'shortname' => 'TD', 'country' => 'Chad', 'nationality' => 'Chadian', 'phonecode' => 235],
            ['id' => 43, 'shortname' => 'CL', 'country' => 'Chile', 'nationality' => 'Chilean', 'phonecode' => 56],
            ['id' => 44, 'shortname' => 'CN', 'country' => 'China', 'nationality' => 'Chinese', 'phonecode' => 86],
            ['id' => 45, 'shortname' => 'CX', 'country' => 'Christmas Island', 'nationality' => 'Christmas Islander', 'phonecode' => 61],
            ['id' => 46, 'shortname' => 'CC', 'country' => 'Cocos (Keeling) Islands', 'nationality' => 'Cocos Islander', 'phonecode' => 672],
            ['id' => 47, 'shortname' => 'CO', 'country' => 'Colombia', 'nationality' => 'Colombian', 'phonecode' => 57],
            ['id' => 48, 'shortname' => 'KM', 'country' => 'Comoros', 'nationality' => 'Comoran', 'phonecode' => 269],
            ['id' => 49, 'shortname' => 'CG', 'country' => 'Congo, Republic of the', 'nationality' => 'Congolese', 'phonecode' => 242],
            ['id' => 50, 'shortname' => 'CD', 'country' => 'Congo, Democratic Republic of the', 'nationality' => 'Congolese', 'phonecode' => 242],
            ['id' => 51, 'shortname' => 'CK', 'country' => 'Cook Islands', 'nationality' => 'Cook Islander', 'phonecode' => 682],
            ['id' => 52, 'shortname' => 'CR', 'country' => 'Costa Rica', 'nationality' => 'Costa Rican', 'phonecode' => 506],
            ['id' => 53, 'shortname' => 'CI', 'country' => 'Cote D\'Ivoire (Ivory Coast)', 'nationality' => 'Ivorian', 'phonecode' => 225],
            ['id' => 54, 'shortname' => 'HR', 'country' => 'Croatia (Hrvatska)', 'nationality' => 'Croatian', 'phonecode' => 385],
            ['id' => 55, 'shortname' => 'CU', 'country' => 'Cuba', 'nationality' => 'Cuban', 'phonecode' => 53],
            ['id' => 56, 'shortname' => 'CY', 'country' => 'Cyprus', 'nationality' => 'Cypriot', 'phonecode' => 357],
            ['id' => 57, 'shortname' => 'CZ', 'country' => 'Czech Republic', 'nationality' => 'Czech', 'phonecode' => 420],
            ['id' => 58, 'shortname' => 'DK', 'country' => 'Denmark', 'nationality' => 'Danish', 'phonecode' => 45],
            ['id' => 59, 'shortname' => 'DJ', 'country' => 'Djibouti', 'nationality' => 'Djibouti', 'phonecode' => 253],
            ['id' => 60, 'shortname' => 'DM', 'country' => 'Dominica', 'nationality' => 'Dominican', 'phonecode' => 1767],
            ['id' => 61, 'shortname' => 'DO', 'country' => 'Dominican Republic', 'nationality' => 'Dominican', 'phonecode' => 1809],
            ['id' => 62, 'shortname' => 'TP', 'country' => 'East Timor', 'nationality' => 'East Timorese', 'phonecode' => 670],
            ['id' => 63, 'shortname' => 'EC', 'country' => 'Ecuador', 'nationality' => 'Ecuadorean', 'phonecode' => 593],
            ['id' => 64, 'shortname' => 'EG', 'country' => 'Egypt', 'nationality' => 'Egyptian', 'phonecode' => 20],
            ['id' => 65, 'shortname' => 'SV', 'country' => 'El Salvador', 'nationality' => 'Salvadoran', 'phonecode' => 503],
            ['id' => 66, 'shortname' => 'GQ', 'country' => 'Equatorial Guinea', 'nationality' => 'Equatorial Guinean', 'phonecode' => 240],
            ['id' => 67, 'shortname' => 'ER', 'country' => 'Eritrea', 'nationality' => 'Eritrean', 'phonecode' => 291],
            ['id' => 68, 'shortname' => 'EE', 'country' => 'Estonia', 'nationality' => 'Estonian', 'phonecode' => 372],
            ['id' => 69, 'shortname' => 'ET', 'country' => 'Ethiopia', 'nationality' => 'Ethiopian', 'phonecode' => 251],
            ['id' => 70, 'shortname' => 'XA', 'country' => 'External Territories of Australia', 'nationality' => null, 'phonecode' => 61],
            ['id' => 71, 'shortname' => 'FK', 'country' => 'Falkland Islands', 'nationality' => 'Falkland Islander (Falklander)', 'phonecode' => 500],
            ['id' => 72, 'shortname' => 'FO', 'country' => 'Faroe Islands', 'nationality' => 'Faroe Islander (Faroese)', 'phonecode' => 298],
            ['id' => 73, 'shortname' => 'FJ', 'country' => 'Fiji Islands', 'nationality' => 'Fijian', 'phonecode' => 679],
            ['id' => 74, 'shortname' => 'FI', 'country' => 'Finland', 'nationality' => 'Finnish', 'phonecode' => 358],
            ['id' => 75, 'shortname' => 'FR', 'country' => 'France', 'nationality' => 'French', 'phonecode' => 33],
            ['id' => 76, 'shortname' => 'GF', 'country' => 'French Guiana', 'nationality' => null, 'phonecode' => 594],
            ['id' => 77, 'shortname' => 'PF', 'country' => 'French Polynesia', 'nationality' => 'French Polynesian', 'phonecode' => 689],
            ['id' => 78, 'shortname' => 'TF', 'country' => 'French Southern Territories', 'nationality' => null, 'phonecode' => 0],
            ['id' => 79, 'shortname' => 'GA', 'country' => 'Gabon', 'nationality' => 'Gabonese', 'phonecode' => 241],
            ['id' => 80, 'shortname' => 'GM', 'country' => 'Gambia', 'nationality' => 'Gambian', 'phonecode' => 220],
            ['id' => 81, 'shortname' => 'GE', 'country' => 'Georgia', 'nationality' => 'Georgian', 'phonecode' => 995],
            ['id' => 82, 'shortname' => 'DE', 'country' => 'Germany', 'nationality' => 'German', 'phonecode' => 49],
            ['id' => 83, 'shortname' => 'GH', 'country' => 'Ghana', 'nationality' => 'Ghanaian', 'phonecode' => 233],
            ['id' => 84, 'shortname' => 'GI', 'country' => 'Gibraltar', 'nationality' => 'Gibraltarian', 'phonecode' => 350],
            ['id' => 85, 'shortname' => 'GR', 'country' => 'Greece', 'nationality' => 'Greek', 'phonecode' => 30],
            ['id' => 86, 'shortname' => 'GL', 'country' => 'Greenland', 'nationality' => 'Greenlander', 'phonecode' => 299],
            ['id' => 87, 'shortname' => 'GD', 'country' => 'Grenada', 'nationality' => 'Grenadian', 'phonecode' => 1473],
            ['id' => 88, 'shortname' => 'GP', 'country' => 'Guadeloupe', 'nationality' => 'Guadeloupean', 'phonecode' => 590],
            ['id' => 89, 'shortname' => 'GU', 'country' => 'Guam', 'nationality' => 'Guamanian', 'phonecode' => 1671],
            ['id' => 90, 'shortname' => 'GT', 'country' => 'Guatemala', 'nationality' => 'Guatemalan', 'phonecode' => 502],
            ['id' => 91, 'shortname' => 'XU', 'country' => 'Guernsey and Alderney', 'nationality' => 'Channel Islander', 'phonecode' => 44],
            ['id' => 92, 'shortname' => 'GN', 'country' => 'Guinea', 'nationality' => 'Guinean', 'phonecode' => 224],
            ['id' => 93, 'shortname' => 'GW', 'country' => 'Guinea-Bissau', 'nationality' => 'Guinea-Bissauan', 'phonecode' => 245],
            ['id' => 94, 'shortname' => 'GY', 'country' => 'Guyana', 'nationality' => 'Guyanese', 'phonecode' => 592],
            ['id' => 95, 'shortname' => 'HT', 'country' => 'Haiti', 'nationality' => 'Haitian', 'phonecode' => 509],
            ['id' => 96, 'shortname' => 'HM', 'country' => 'Heard and McDonald Islands', 'nationality' => null, 'phonecode' => 0],
            ['id' => 97, 'shortname' => 'HN', 'country' => 'Honduras', 'nationality' => 'Honduran', 'phonecode' => 504],
            ['id' => 98, 'shortname' => 'HK', 'country' => 'Hong Kong S.A.R.', 'nationality' => 'Chinese/Hong Konger', 'phonecode' => 852],
            ['id' => 99, 'shortname' => 'HU', 'country' => 'Hungary', 'nationality' => 'Hungarian', 'phonecode' => 36],
            ['id' => 100, 'shortname' => 'IS', 'country' => 'Iceland', 'nationality' => 'Icelander', 'phonecode' => 354],
            ['id' => 101, 'shortname' => 'IN', 'country' => 'India', 'nationality' => 'Indian', 'phonecode' => 91],
            ['id' => 102, 'shortname' => 'ID', 'country' => 'Indonesia', 'nationality' => 'Indonesian', 'phonecode' => 62],
            ['id' => 103, 'shortname' => 'IR', 'country' => 'Iran', 'nationality' => 'Iranian', 'phonecode' => 98],
            ['id' => 104, 'shortname' => 'IQ', 'country' => 'Iraq', 'nationality' => 'Iraqi', 'phonecode' => 964],
            ['id' => 105, 'shortname' => 'IE', 'country' => 'Ireland', 'nationality' => 'Irish', 'phonecode' => 353],
            ['id' => 106, 'shortname' => 'IL', 'country' => 'Israel', 'nationality' => 'Israeli', 'phonecode' => 972],
            ['id' => 107, 'shortname' => 'IT', 'country' => 'Italy', 'nationality' => 'Italian', 'phonecode' => 39],
            ['id' => 108, 'shortname' => 'JM', 'country' => 'Jamaica', 'nationality' => 'Jamaican', 'phonecode' => 1876],
            ['id' => 109, 'shortname' => 'JP', 'country' => 'Japan', 'nationality' => 'Japanese', 'phonecode' => 81],
            ['id' => 110, 'shortname' => 'XJ', 'country' => 'Jersey', 'nationality' => 'New Jerseyans', 'phonecode' => 44],
            ['id' => 111, 'shortname' => 'JO', 'country' => 'Jordan', 'nationality' => 'Jordanian', 'phonecode' => 962],
            ['id' => 112, 'shortname' => 'KZ', 'country' => 'Kazakhstan', 'nationality' => 'Kazakhstani', 'phonecode' => 7],
            ['id' => 113, 'shortname' => 'KE', 'country' => 'Kenya', 'nationality' => 'Kenyan', 'phonecode' => 254],
            ['id' => 114, 'shortname' => 'KI', 'country' => 'Kiribati', 'nationality' => 'I-Kiribati', 'phonecode' => 686],
            ['id' => 115, 'shortname' => 'KP', 'country' => 'Korea North', 'nationality' => 'Korean (North)', 'phonecode' => 850],
            ['id' => 116, 'shortname' => 'KR', 'country' => 'Korea South', 'nationality' => 'Korean (South)', 'phonecode' => 82],
            ['id' => 117, 'shortname' => 'KW', 'country' => 'Kuwait', 'nationality' => 'Kuwaiti', 'phonecode' => 965],
            ['id' => 118, 'shortname' => 'KG', 'country' => 'Kyrgyzstan', 'nationality' => 'Kyrgyzstani', 'phonecode' => 996],
            ['id' => 119, 'shortname' => 'LA', 'country' => 'Laos', 'nationality' => 'Laotian', 'phonecode' => 856],
            ['id' => 120, 'shortname' => 'LV', 'country' => 'Latvia', 'nationality' => 'Latvian', 'phonecode' => 371],
            ['id' => 121, 'shortname' => 'LB', 'country' => 'Lebanon', 'nationality' => 'Lebanese', 'phonecode' => 961],
            ['id' => 122, 'shortname' => 'LS', 'country' => 'Lesotho', 'nationality' => 'Mosotho', 'phonecode' => 266],
            ['id' => 123, 'shortname' => 'LR', 'country' => 'Liberia', 'nationality' => 'Liberian', 'phonecode' => 231],
            ['id' => 124, 'shortname' => 'LY', 'country' => 'Libya', 'nationality' => 'Libyan', 'phonecode' => 218],
            ['id' => 125, 'shortname' => 'LI', 'country' => 'Liechtenstein', 'nationality' => 'Liechtensteiner', 'phonecode' => 423],
            ['id' => 126, 'shortname' => 'LT', 'country' => 'Lithuania', 'nationality' => 'Lithuanian', 'phonecode' => 370],
            ['id' => 127, 'shortname' => 'LU', 'country' => 'Luxembourg', 'nationality' => 'Luxembourger', 'phonecode' => 352],
            ['id' => 128, 'shortname' => 'MO', 'country' => 'Macau S.A.R.', 'nationality' => 'Macanese', 'phonecode' => 853],
            ['id' => 129, 'shortname' => 'MK', 'country' => 'Macedonia', 'nationality' => 'Macedonian', 'phonecode' => 389],
            ['id' => 130, 'shortname' => 'MG', 'country' => 'Madagascar', 'nationality' => 'Malagasy', 'phonecode' => 261],
            ['id' => 131, 'shortname' => 'MW', 'country' => 'Malawi', 'nationality' => 'Malawian', 'phonecode' => 265],
            ['id' => 132, 'shortname' => 'MY', 'country' => 'Malaysia', 'nationality' => 'Malaysian', 'phonecode' => 60],
            ['id' => 133, 'shortname' => 'MV', 'country' => 'Maldives', 'nationality' => 'Maldivan', 'phonecode' => 960],
            ['id' => 134, 'shortname' => 'ML', 'country' => 'Mali', 'nationality' => 'Malian', 'phonecode' => 223],
            ['id' => 135, 'shortname' => 'MT', 'country' => 'Malta', 'nationality' => 'Maltese', 'phonecode' => 356],
            ['id' => 136, 'shortname' => 'XM', 'country' => 'Man (Isle of)', 'nationality' => 'Manx', 'phonecode' => 44],
            ['id' => 137, 'shortname' => 'MH', 'country' => 'Marshall Islands', 'nationality' => 'Marshallese', 'phonecode' => 692],
            ['id' => 138, 'shortname' => 'MQ', 'country' => 'Martinique', 'nationality' => 'Martiniquan', 'phonecode' => 596],
            ['id' => 139, 'shortname' => 'MR', 'country' => 'Mauritania', 'nationality' => 'Mauritanian', 'phonecode' => 222],
            ['id' => 140, 'shortname' => 'MU', 'country' => 'Mauritius', 'nationality' => 'Mauritian', 'phonecode' => 230],
            ['id' => 141, 'shortname' => 'YT', 'country' => 'Mayotte', 'nationality' => 'Mahorais', 'phonecode' => 269],
            ['id' => 142, 'shortname' => 'MX', 'country' => 'Mexico', 'nationality' => 'Mexican', 'phonecode' => 52],
            ['id' => 143, 'shortname' => 'FM', 'country' => 'Micronesia', 'nationality' => 'Micronesian', 'phonecode' => 691],
            ['id' => 144, 'shortname' => 'MD', 'country' => 'Moldova', 'nationality' => 'Moldovan', 'phonecode' => 373],
            ['id' => 145, 'shortname' => 'MC', 'country' => 'Monaco', 'nationality' => 'Monegasque', 'phonecode' => 377],
            ['id' => 146, 'shortname' => 'MN', 'country' => 'Mongolia', 'nationality' => 'Mongolian', 'phonecode' => 976],
            ['id' => 147, 'shortname' => 'MS', 'country' => 'Montserrat', 'nationality' => 'Montserratian', 'phonecode' => 1664],
            ['id' => 148, 'shortname' => 'MA', 'country' => 'Morocco', 'nationality' => 'Moroccan', 'phonecode' => 212],
            ['id' => 149, 'shortname' => 'MZ', 'country' => 'Mozambique', 'nationality' => 'Mozambican', 'phonecode' => 258],
            ['id' => 150, 'shortname' => 'MM', 'country' => 'Myanmar', 'nationality' => 'Burmese', 'phonecode' => 95],
            ['id' => 151, 'shortname' => 'NA', 'country' => 'Namibia', 'nationality' => 'Namibian', 'phonecode' => 264],
            ['id' => 152, 'shortname' => 'NR', 'country' => 'Nauru', 'nationality' => 'Nauruan', 'phonecode' => 674],
            ['id' => 153, 'shortname' => 'NP', 'country' => 'Nepal', 'nationality' => 'Nepalese', 'phonecode' => 977],
            ['id' => 154, 'shortname' => 'AN', 'country' => 'Netherlands Antilles', 'nationality' => 'Netherlands Antillean', 'phonecode' => 599],
            ['id' => 155, 'shortname' => 'NL', 'country' => 'Netherlands', 'nationality' => 'Netherlander', 'phonecode' => 31],
            ['id' => 156, 'shortname' => 'NC', 'country' => 'New Caledonia', 'nationality' => 'Caledonian', 'phonecode' => 687],
            ['id' => 157, 'shortname' => 'NZ', 'country' => 'New Zealand', 'nationality' => 'New Zealander', 'phonecode' => 64],
            ['id' => 158, 'shortname' => 'NI', 'country' => 'Nicaragua', 'nationality' => 'Nicaraguan', 'phonecode' => 505],
            ['id' => 159, 'shortname' => 'NE', 'country' => 'Niger', 'nationality' => 'Nigerien', 'phonecode' => 227],
            ['id' => 160, 'shortname' => 'NG', 'country' => 'Nigeria', 'nationality' => 'Nigerian', 'phonecode' => 234],
            ['id' => 161, 'shortname' => 'NU', 'country' => 'Niue', 'nationality' => 'Niuean', 'phonecode' => 683],
            ['id' => 162, 'shortname' => 'NF', 'country' => 'Norfolk Island', 'nationality' => 'Norfolk Islander', 'phonecode' => 672],
            ['id' => 163, 'shortname' => 'MP', 'country' => 'Northern Mariana Islands', 'nationality' => 'American (Northern Mariana)', 'phonecode' => 1670],
            ['id' => 164, 'shortname' => 'NO', 'country' => 'Norway', 'nationality' => 'Norwegian', 'phonecode' => 47],
            ['id' => 165, 'shortname' => 'OM', 'country' => 'Oman', 'nationality' => 'Omani', 'phonecode' => 968],
            ['id' => 166, 'shortname' => 'PK', 'country' => 'Pakistan', 'nationality' => 'Pakistani', 'phonecode' => 92],
            ['id' => 167, 'shortname' => 'PW', 'country' => 'Palau', 'nationality' => 'Palauan', 'phonecode' => 680],
            ['id' => 168, 'shortname' => 'PS', 'country' => 'Palestinian Territory Occupied', 'nationality' => null, 'phonecode' => 970],
            ['id' => 169, 'shortname' => 'PA', 'country' => 'Panama', 'nationality' => 'Panamanian', 'phonecode' => 507],
            ['id' => 170, 'shortname' => 'PG', 'country' => 'Papua new Guinea', 'nationality' => 'Papua New Guinean', 'phonecode' => 675],
            ['id' => 171, 'shortname' => 'PY', 'country' => 'Paraguay', 'nationality' => 'Paraguayan', 'phonecode' => 595],
            ['id' => 172, 'shortname' => 'PE', 'country' => 'Peru', 'nationality' => 'Peruvian', 'phonecode' => 51],
            ['id' => 173, 'shortname' => 'PH', 'country' => 'Philippines', 'nationality' => 'Filipino', 'phonecode' => 63],
            ['id' => 174, 'shortname' => 'PN', 'country' => 'Pitcairn Island', 'nationality' => 'Pitcairn Islander', 'phonecode' => 0],
            ['id' => 175, 'shortname' => 'PL', 'country' => 'Poland', 'nationality' => 'Polish', 'phonecode' => 48],
            ['id' => 176, 'shortname' => 'PT', 'country' => 'Portugal', 'nationality' => 'Portuguese', 'phonecode' => 351],
            ['id' => 177, 'shortname' => 'PR', 'country' => 'Puerto Rico', 'nationality' => 'Puerto Rican', 'phonecode' => 1787],
            ['id' => 178, 'shortname' => 'QA', 'country' => 'Qatar', 'nationality' => 'Qatari', 'phonecode' => 974],
            ['id' => 179, 'shortname' => 'RE', 'country' => 'Reunion', 'nationality' => 'Réunionnais', 'phonecode' => 262],
            ['id' => 180, 'shortname' => 'RO', 'country' => 'Romania', 'nationality' => 'Romanian', 'phonecode' => 40],
            ['id' => 181, 'shortname' => 'RU', 'country' => 'Russia', 'nationality' => 'Russian', 'phonecode' => 70],
            ['id' => 182, 'shortname' => 'RW', 'country' => 'Rwanda', 'nationality' => 'Rwandan', 'phonecode' => 250],
            ['id' => 183, 'shortname' => 'SH', 'country' => 'Saint Helena', 'nationality' => 'Saint Helenian', 'phonecode' => 290],
            ['id' => 184, 'shortname' => 'KN', 'country' => 'Saint Kitts And Nevis', 'nationality' => 'Kittian and Nevisian', 'phonecode' => 1869],
            ['id' => 185, 'shortname' => 'LC', 'country' => 'Saint Lucia', 'nationality' => 'Saint Lucian', 'phonecode' => 1758],
            ['id' => 186, 'shortname' => 'PM', 'country' => 'Saint Pierre and Miquelon', 'nationality' => 'French', 'phonecode' => 508],
            ['id' => 187, 'shortname' => 'VC', 'country' => 'Saint Vincent And The Grenadines', 'nationality' => 'Saint Vincentian (Vincentian)', 'phonecode' => 1784],
            ['id' => 188, 'shortname' => 'WS', 'country' => 'Samoa', 'nationality' => 'Samoan', 'phonecode' => 684],
            ['id' => 189, 'shortname' => 'SM', 'country' => 'San Marino', 'nationality' => 'Sammarinese', 'phonecode' => 378],
            ['id' => 190, 'shortname' => 'ST', 'country' => 'Sao Tome and Principe', 'nationality' => 'Sao Tomean', 'phonecode' => 239],
            ['id' => 191, 'shortname' => 'SA', 'country' => 'Saudi Arabia', 'nationality' => 'Saudi Arabian', 'phonecode' => 966],
            ['id' => 192, 'shortname' => 'SN', 'country' => 'Senegal', 'nationality' => 'Senegalese', 'phonecode' => 221],
            ['id' => 193, 'shortname' => 'RS', 'country' => 'Serbia', 'nationality' => 'Serbian', 'phonecode' => 381],
            ['id' => 194, 'shortname' => 'SC', 'country' => 'Seychelles', 'nationality' => 'Seychellois', 'phonecode' => 248],
            ['id' => 195, 'shortname' => 'SL', 'country' => 'Sierra Leone', 'nationality' => 'Sierra Leonean', 'phonecode' => 232],
            ['id' => 196, 'shortname' => 'SG', 'country' => 'Singapore', 'nationality' => 'Singaporean', 'phonecode' => 65],
            ['id' => 197, 'shortname' => 'SK', 'country' => 'Slovakia', 'nationality' => 'Slovak', 'phonecode' => 421],
            ['id' => 198, 'shortname' => 'SI', 'country' => 'Slovenia', 'nationality' => 'Slovene', 'phonecode' => 386],
            ['id' => 199, 'shortname' => 'XG', 'country' => 'Smaller Territories of the UK', 'nationality' => null, 'phonecode' => 44],
            ['id' => 200, 'shortname' => 'SB', 'country' => 'Solomon Islands', 'nationality' => 'Solomon Islander', 'phonecode' => 677],
            ['id' => 201, 'shortname' => 'SO', 'country' => 'Somalia', 'nationality' => 'Somali', 'phonecode' => 252],
            ['id' => 202, 'shortname' => 'ZA', 'country' => 'South Africa', 'nationality' => 'South African', 'phonecode' => 27],
            ['id' => 203, 'shortname' => 'GS', 'country' => 'South Georgia', 'nationality' => 'Georgian', 'phonecode' => 0],
            ['id' => 204, 'shortname' => 'SS', 'country' => 'South Sudan', 'nationality' => 'Sudanese', 'phonecode' => 211],
            ['id' => 205, 'shortname' => 'ES', 'country' => 'Spain', 'nationality' => 'Spanish', 'phonecode' => 34],
            ['id' => 206, 'shortname' => 'LK', 'country' => 'Sri Lanka', 'nationality' => 'Sri Lankan', 'phonecode' => 94],
            ['id' => 207, 'shortname' => 'SD', 'country' => 'Sudan', 'nationality' => 'Sudanese', 'phonecode' => 249],
            ['id' => 208, 'shortname' => 'SR', 'country' => 'Suriname', 'nationality' => 'Surinamer', 'phonecode' => 597],
            ['id' => 209, 'shortname' => 'SJ', 'country' => 'Svalbard And Jan Mayen Islands', 'nationality' => null, 'phonecode' => 47],
            ['id' => 210, 'shortname' => 'SZ', 'country' => 'Swaziland', 'nationality' => 'Swazi', 'phonecode' => 268],
            ['id' => 211, 'shortname' => 'SE', 'country' => 'Sweden', 'nationality' => 'Swedish', 'phonecode' => 46],
            ['id' => 212, 'shortname' => 'CH', 'country' => 'Switzerland', 'nationality' => 'Swiss', 'phonecode' => 41],
            ['id' => 213, 'shortname' => 'SY', 'country' => 'Syria', 'nationality' => 'Syrian', 'phonecode' => 963],
            ['id' => 214, 'shortname' => 'TW', 'country' => 'Taiwan', 'nationality' => 'Taiwanese', 'phonecode' => 886],
            ['id' => 215, 'shortname' => 'TJ', 'country' => 'Tajikistan', 'nationality' => 'Tadzhik', 'phonecode' => 992],
            ['id' => 216, 'shortname' => 'TZ', 'country' => 'Tanzania', 'nationality' => 'Tanzanian', 'phonecode' => 255],
            ['id' => 217, 'shortname' => 'TH', 'country' => 'Thailand', 'nationality' => 'Thai', 'phonecode' => 66],
            ['id' => 218, 'shortname' => 'TG', 'country' => 'Togo', 'nationality' => 'Togolese', 'phonecode' => 228],
            ['id' => 219, 'shortname' => 'TK', 'country' => 'Tokelau', 'nationality' => 'Tokelauan', 'phonecode' => 690],
            ['id' => 220, 'shortname' => 'TO', 'country' => 'Tonga', 'nationality' => 'Tongan', 'phonecode' => 676],
            ['id' => 221, 'shortname' => 'TT', 'country' => 'Trinidad And Tobago', 'nationality' => 'Trinidadian', 'phonecode' => 1868],
            ['id' => 222, 'shortname' => 'TN', 'country' => 'Tunisia', 'nationality' => 'Tunisian', 'phonecode' => 216],
            ['id' => 223, 'shortname' => 'TR', 'country' => 'Turkey', 'nationality' => 'Turkish', 'phonecode' => 90],
            ['id' => 224, 'shortname' => 'TM', 'country' => 'Turkmenistan', 'nationality' => 'Turkmen', 'phonecode' => 7370],
            ['id' => 225, 'shortname' => 'TC', 'country' => 'Turks And Caicos Islands', 'nationality' => null, 'phonecode' => 1649],
            ['id' => 226, 'shortname' => 'TV', 'country' => 'Tuvalu', 'nationality' => 'Tuvaluan', 'phonecode' => 688],
            ['id' => 227, 'shortname' => 'UG', 'country' => 'Uganda', 'nationality' => 'Ugandan', 'phonecode' => 256],
            ['id' => 228, 'shortname' => 'UA', 'country' => 'Ukraine', 'nationality' => 'Ukrainian', 'phonecode' => 380],
            ['id' => 229, 'shortname' => 'AE', 'country' => 'United Arab Emirates', 'nationality' => 'Emirian', 'phonecode' => 971],
            ['id' => 230, 'shortname' => 'GB', 'country' => 'United Kingdom', 'nationality' => 'British', 'phonecode' => 44],
            ['id' => 231, 'shortname' => 'US', 'country' => 'United States', 'nationality' => 'American', 'phonecode' => 1],
            ['id' => 232, 'shortname' => 'UM', 'country' => 'United States Minor Outlying Islands', 'nationality' => null, 'phonecode' => 1],
            ['id' => 233, 'shortname' => 'UY', 'country' => 'Uruguay', 'nationality' => 'Uruguayan', 'phonecode' => 598],
            ['id' => 234, 'shortname' => 'UZ', 'country' => 'Uzbekistan', 'nationality' => 'Uzbekistani', 'phonecode' => 998],
            ['id' => 235, 'shortname' => 'VU', 'country' => 'Vanuatu', 'nationality' => 'Ni-Vanuatu', 'phonecode' => 678],
            ['id' => 236, 'shortname' => 'VA', 'country' => 'Vatican City State (Holy See)', 'nationality' => 'Vaticanian', 'phonecode' => 39],
            ['id' => 237, 'shortname' => 'VE', 'country' => 'Venezuela', 'nationality' => 'Venezuelan', 'phonecode' => 58],
            ['id' => 238, 'shortname' => 'VN', 'country' => 'Vietnam', 'nationality' => 'Vietnamese', 'phonecode' => 84],
            ['id' => 239, 'shortname' => 'VG', 'country' => 'Virgin Islands (British)', 'nationality' => 'British Virgin Islander', 'phonecode' => 1284],
            ['id' => 240, 'shortname' => 'VI', 'country' => 'Virgin Islands (US)', 'nationality' => 'Virgin Islander (US)', 'phonecode' => 1340],
            ['id' => 241, 'shortname' => 'WF', 'country' => 'Wallis And Futuna Islands', 'nationality' => 'Wallis and Futuna Islander (Wallisian,Futunan)', 'phonecode' => 681],
            ['id' => 242, 'shortname' => 'EH', 'country' => 'Western Sahara', 'nationality' => 'Sahrawi/Sahrawian/Sahraouian', 'phonecode' => 212],
            ['id' => 243, 'shortname' => 'YE', 'country' => 'Yemen', 'nationality' => 'Yemeni', 'phonecode' => 967],
            ['id' => 244, 'shortname' => 'YU', 'country' => 'Yugoslavia', 'nationality' => 'Yugoslavian', 'phonecode' => 38],
            ['id' => 245, 'shortname' => 'ZM', 'country' => 'Zambia', 'nationality' => 'Zambian', 'phonecode' => 260],
            ['id' => 246, 'shortname' => 'ZW', 'country' => 'Zimbabwe', 'nationality' => 'Zimbabwean', 'phonecode' => 263]
        ];
        DB::table('countries')->insert($countries);
    }

}
