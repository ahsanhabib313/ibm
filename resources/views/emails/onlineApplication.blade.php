<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Application Response</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table width="100%">
        <tbody>
            <tr>
                <td>
                    01. Select your preferred courses
                </td>
                <td>
                    @if (isset($Qustion01))
                        <ul>
                            @foreach ($Qustion01 as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    02. Do you need Airport pickup?
                </td>
                <td>
                    @if (isset($Qustion02))
                        {{ $Qustion02 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    03. Title
                </td>
                <td>
                    @if (isset($Qustion03))
                        {{ $Qustion03 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    04. Family name
                </td>
                <td>
                    @if (isset($Qustion04))
                        {{ $Qustion04 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    05. Given name
                </td>
                <td>
                    @if (isset($Qustion05))
                        {{ $Qustion05 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    06. Gender
                </td>
                <td>
                    @if (isset($Qustion06))
                        {{ $Qustion06 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    07. Date of Birth
                </td>
                <td>
                    @if (isset($Qustion07))
                        {{ $Qustion07 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    08. Nationality
                </td>
                <td>
                    @if (isset($Qustion08))
                        {{ $Qustion08 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    09. Passport No.
                </td>
                <td>
                    @if (isset($Qustion09))
                        {{ $Qustion09 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    10. Expiry Date(Passport)
                </td>
                <td>
                    @if (isset($Qustion10))
                        {!! $Qustion10 !!}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    11. Visa type
                </td>
                <td>
                    @if (isset($Qustion11))
                        {{ $Qustion11 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    12. Visa subclass
                </td>
                <td>
                    @if (isset($Qustion12))
                        {{ $Qustion12 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    13. Visa number
                </td>
                <td>
                    @if (isset($Qustion13))
                        {{ $Qustion13 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    14. Expiry Date(visa)
                </td>
                <td>
                    @if (isset($Qustion14))
                        {{ $Qustion14 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    15. Do you have a Unique Student Identifier (USI)?
                </td>
                <td>
                    @if (isset($Qustion15))
                        {{ $Qustion15 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>USI verified by Institute of Business and Management (Victoria)</strong>
                </td>
            </tr>
            <tr>
                <td>
                    16. Staff name
                </td>
                <td>
                    @if (isset($Qustion16))
                        {{ $Qustion16 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    17. Signature
                </td>
                <td>
                    @if (isset($Qustion17))
                        {{ $Qustion17 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    18. Date(visa)
                </td>
                <td>
                    @if (isset($Qustion18))
                        {{ $Qustion18 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Residential Address (Home Country)</strong>
                </td>
            </tr>
            <tr>
                <td>
                    19. Address
                </td>
                <td>
                    @if (isset($Qustion19))
                        {{ $Qustion19 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    20. Country
                </td>
                <td>
                    @if (isset($Qustion20))
                        {{ $Qustion20 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    21. Phone
                </td>
                <td>
                    @if (isset($Qustion21))
                        {{ $Qustion21 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    22. Email
                </td>
                <td>
                    @if (isset($Qustion22))
                        {{ $Qustion22 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Residential Address(Australia)</strong>
                </td>
            </tr>
            <tr>
                <td>
                    23. Building/Property Name
                </td>
                <td>
                    @if (isset($Qustion23))
                        {{ $Qustion23 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    24. Flat/Unit Details
                </td>
                <td>
                    @if (isset($Qustion24))
                        {{ $Qustion24 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    25. Street No
                </td>
                <td>
                    @if (isset($Qustion25))
                        {{ $Qustion25 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    26. Street Name
                </td>
                <td>
                    @if (isset($Qustion26))
                        {{ $Qustion26 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    27. Suburb
                </td>
                <td>
                    @if (isset($Qustion27))
                        {{ $Qustion27 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    28. State/Territory
                </td>
                <td>
                    @if (isset($Qustion28))
                        {{ $Qustion28 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    29. Postcode
                </td>
                <td>
                    @if (isset($Qustion29))
                        {{ $Qustion29 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    30. PO Box or roadside delivery box
                </td>
                <td>
                    @if (isset($Qustion30))
                        {{ $Qustion30 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    31. Preferred Contact Method
                </td>
                <td>
                    @if (isset($Qustion31))
                        {{ $Qustion31 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Post Address (if different from residential Address) </strong>
                </td>
            </tr>
            <tr>
                <td>32. Building/Property Name</td>
                <td>
                    @if (isset($Qustion32))
                        {{ $Qustion32 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>33. Flat/Unit Details</td>
                <td>
                    @if (isset($Qustion33))
                        {{ $Qustion33 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>34. Street No</td>
                <td>
                    @if (isset($Qustion34))
                        {{ $Qustion34 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>35. Street Name</td>
                <td>
                    @if (isset($Qustion35))
                        {{ $Qustion35 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>36. Suburb</td>
                <td>
                    @if (isset($Qustion36))
                        {{ $Qustion36 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>37. State/Territory</td>
                <td>
                    @if (isset($Qustion37))
                        {{ $Qustion37 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>38. Postcode</td>
                <td>
                    @if (isset($Qustion38))
                        {{ $Qustion38 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>39. PO Box or roadside delivery box</td>
                <td>
                    @if (isset($Qustion39))
                        {{ $Qustion39 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>40. Preferred Contact Method</td>
                <td>
                    @if (isset($Qustion40))
                        {{ $Qustion40 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Emergency Contact in Australia or Home Country </strong></td>
            </tr>
            <tr>
                <td>41. Name</td>
                <td>
                    @if (isset($Qustion41))
                        {{ $Qustion41 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>42. Email</td>
                <td>
                    @if (isset($Qustion42))
                        {{ $Qustion42 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>43. Relationship</td>
                <td>
                    @if (isset($Qustion43))
                        {{ $Qustion43 }}
                    @endif
                </td>
            </tr>
                        <tr>
                <td colspan="2"><strong>English Language Proficiency</strong></td>
            </tr>
            <tr>
                <td>44. Assessment Type</td>
                <td>
                    @if (isset($Qustion44))
                        {{ $Qustion44 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td> 45. Score achieved</td>
                <td>
                    @if (isset($Qustion45))
                        {{ $Qustion45 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>46. Date</td>
                <td>
                    @if (isset($Qustion46))
                        {{ $Qustion46 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>47. Not Required. I am from Level I country. (You will be required to undertake Placement Assessment if you are not fromthe list of exempted countries. Refer Entry requirement policy) </td>
                <td>
                    @if (isset($Qustion43))
                        yes
                    @endif
                </td>
            </tr>
                        <tr>
                <td>48. Have you successfully completed any of the following qualifications in Australia or hold any recognized overseas qualification?</td>
                <td>
                    @if (isset($Qustion48))
                        {{ $Qustion48 }}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>49. In case of overseas qualification, has the qualification been skill assessed in
Australia?</td>
                <td>
                    @if (isset($Qustion49))
                        {{ $Qustion49 }}
                    @endif
                </td>
            </tr>
                                    <tr>
                <td colspan="2"><strong>Most recent or current Qualifications</strong></td>
            </tr>
                        <tr>
                <td>50. Name of qualification</td>
                <td>
                    @if (isset($Qustion50))
                        {{ $Qustion50 }}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>51. School / Institution</td>
                <td>
                    @if (isset($Qustion51))
                        {{ $Qustion51 }}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>52. Country</td>
                <td>
                    @if (isset($Qustion52))
                        {{ $Qustion52 }}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>
53. Year was/to be completed</td>
                <td>
                    @if (isset($Qustion53))
                        {{ $Qustion53 }}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>54. Do you want to apply for RPL/Credit Transfer? </td>
                <td>
                    @if (isset($Qustion54))
                        {{ $Qustion54 }}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>55. Reason for Study Which of the following best describes your reason for undertaking this course? </td>
                <td>
                    @if (isset($Qustion55))
                        {{ $Qustion55}}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>56. Do you need any special support such as Language, Literacy and Numeracy? </td>
                <td>
                    @if (isset($Qustion56))
                        {{ $Qustion56}}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>57. Do you suffer from any physical / mental disability that may affect your participation in the course?  </td>
                <td>
                    @if (isset($Qustion57))
                        {{ $Qustion57}}
                    @endif
                </td>
            </tr>
            </tr>
                        <tr>
                <td>58. Any Other Special Need? </td>
                <td>
                    @if (isset($Qustion58))
                        {{ $Qustion58}}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>59. Which of the following best describes your current employment status? </td>
                <td>
                    @if (isset($Qustion59))
                        {{ $Qustion59}}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>60. Student Declaration and consent</td>
                <td>
                     @if (isset($Qustion60))
                        <ul>
                            @foreach ($Qustion60 as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                </td>
            </tr>
                        <tr>
                <td>61. Use of personal information</td>
                <td>
                    @if (isset($Qustion61))
                        yes
                    @endif
                </td>
            </tr>
                        <tr>
                <td>62. Student name</td>
                <td>
                    @if (isset($Qustion62))
                        {{ $Qustion62}}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>63. Student date</td>
                <td>
                    @if (isset($Qustion63))
                        {{ $Qustion63}}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>64. Application Checklist</td>
                <td>
                     @if (isset($Qustion64))
                        <ul>
                            @foreach ($Qustion64 as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                </td>
            </tr>
                                    <tr>
                <td colspan="2"><strong>Education Agent Details (If applicable) </strong></td>
            </tr>
                        <tr>
                <td>65. Agency name</td>
                <td>
                    @if (isset($Qustion65))
                        {{ $Qustion65}}
                    @endif
                </td>
            </tr>
            </tr>
                        <tr>
                <td>66. Agent name</td>
                <td>
                    @if (isset($Qustion66))
                        {{ $Qustion66}}
                    @endif
                </td>
            </tr>
            </tr>
                        <tr>
                <td>67. Email</td>
                <td>
                    @if (isset($Qustion67))
                        {{ $Qustion67}}
                    @endif
                </td>
            </tr>
                        <tr>
                <td>68. Agent declaration (Please click all the circles to indicate your agreement)</td>
                <td>
                     @if (isset($Qustion68))
                        <ul>
                            @foreach ($Qustion68 as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
