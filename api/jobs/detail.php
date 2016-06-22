<?php
/**
 * Staging API server:      https://api-staging.vietnamworks.com
 * Production API server:   https://api.vietnamworks.com
 *
 * Request:
 *      POST https://{api_server_domain}/jobs/view/job_id/{jobId}
 *          {token}                     Login token of user account. It will be renew and return back to use for next request
 *      headers:
 *          CONTENT-MD5: your_api_key
 *      Parameters:
 *
 * Response on error:
 *      HTTP/1.1 400 Bad Request
 *      Content-Type: application/json
 *      body: {"message": "explain about happened error"}
 *
 * Response on success:
 *      HTTP/1.1 200 OK
 *      Content-Type: application/json
 *      body: {
 *          "meta": {
 *              "code": "200",
 *              "message": ""
 *          },
 *      "data": {
 *          "login_token": "",
 *          "job_url": {
 *              "en": "http://staging.vietnamworks.com/tech-engineer-2-2-578758-jd",
 *              "vn": "http://staging.vietnamworks.com/tech-engineer-2-2-578758-jv"
 *          },
 *          "job_detail": {
 *              "job_id": 578758,
 *              "job_title": "Tech Engineer",
 *              "job_description": "job description",
 *              "job_requirement": "job requirement",
 *              "number_of_views": "number of views",
 *              "num_of_applications": "number of applications",
 *              "skills": [
 *                  {
 *                      "skillName": "Test",
 *                      "skillWeight": 100
 *                  }
 *              ],
 *              "saved": "is saved by job-seeker 1: saved, 0: not save yet",
 *              "applied": "is applied by job-seeker 1: already applied, 0: not apply yet",
 *              "required_cover_letter": "required cover letter when job-seeker apply 0: not show, 1: required, 2: optional"
 *           },
 *          "job_summary": {
 *          "deadline_to_apply": "",
 *          "salary_range": "150 - 1000",
 *          "salary_min": 150,
 *          "salary_max": 1000,
 *          "benefits": [
 *              {
 *                  "benefitValue": "13 salary",
 *                  "benefitId": 1
 *              },
 *              {
 *                  "benefitValue": "10 days full paid leave",
 *                  "benefitId": 3
 *              }
 *          ],
 *          "salary_visible": true,
 *          "job_location": "29,56,71",
 *          "job_level": 7,
 *          "job_category": "35,55,67",
 *          "prefer_language": 5
 *       },
 *       "job_company": {
 *          "company_name": "Vietnamworks",
 *          "company_size": "100-499",
 *          "company_address": "130 Sương Nguyệt Ánh",
 *          "company_profile": "company profile",
 *          "company_logo": "company logo url",
 *          "contact_person": "Contact person name"
 *      }
 *      "login_token": "New login token of user account"
 *   }
 */
$apiKey     = 'Consumer Key goes here';
$apiHost    = 'https://api-staging.vietnamworks.com';
$apiPath    = '/jobs/view/job_id/{jobId}';
$jsonString = json_encode(array());
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL             => $apiHost.$apiPath,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_SSL_VERIFYPEER  => false, // ignore SSL verification
    CURLOPT_POST            => true,  // http request method is POST
    CURLOPT_HTTPHEADER      => array(
        "CONTENT-MD5: $apiKey",
        'Content-Type: application/json',
        'Content-Length: '.strlen($jsonString)
    ),
    CURLOPT_POSTFIELDS      => $jsonString
));
$response = curl_exec($ch);
$responseArray = (array)json_decode($response, true);;
if ($responseArray['meta']['code'] == 400) { // error happened
    echo 'Server returned an error with message: '.$responseArray['meta']['message'];
} elseif ($responseArray['meta']['code'] == 200)  {
    echo "Response status: ".$responseArray['meta']['message']."<br />\nJob Information: <br />";
    // search OK. Handle your own code here with $responseArray['data']
    var_dump($responseArray['data']);
} else {
    //unknown error
    $info = curl_getinfo($ch);
    echo "An error happened: \n".curl_error($ch)."\nInformation: ".print_r($info, true)."\nResponse: $response";
}
curl_close($ch);