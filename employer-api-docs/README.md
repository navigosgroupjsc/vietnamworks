# Vietnamworks’s API documentation

This content has moved to [Vietnamworks Integration Documents](http://developers.vietnamworks.com).

****
# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [4.0.0] - 2024-04-24

See updated content at [Vietnamworks Integration Documents](http://developers.vietnamworks.com).

## [3.0.0] - 2023-09-01

Post / Update Job V3 will require new Company Industry and Job Function. Remove leagcy job_categories and job_category_orders fields.

### Added
- New API Gets the job form’s details (V3) [Gets the job form’s details (V3)](#gets-the-job-forms-details-v3)
- New API Creates a job post (V3) [Creates a job post (V3)](#creates-a-job-post-v3)
- New API Fully updates an online job post V3 [Fully updates an online job post (V3)](#fully-updates-an-online-job-post-v3)
- New API Partially updates an online job post V3 [Partially updates an online job post (V3))](#partially-updates-an-online-job-post-v3)
- New API to get list of Company Indutries [3.8.7. List of Company Industries](#387-list-of-company-industries)
- New API to get list of Job Functions [3.8.8. List of Job Functions](#388-list-of-job-functions)

### Deprecated
- [Gets the job form’s details (V2 / Will be deprecated)](#gets-the-job-forms-details-v2--will-be-deprecated)
- [Creates a job post (V2) / (Will be deprecated)](#creates-a-job-post-v2--will-be-deprecated)
- [Fully updates an online job post V2 / (Will be Deprecated)](#fully-updates-an-online-job-post-v2--will-be-deprecated)
- [Partially updates an online job post V2 / ( Will be Deprecated )](#partially-updates-an-online-job-post-v2---will-be-deprecated)

## [2.0.6] - 2022-12-09

### Added
- Add API to get applications from a specific Job [Job Applications](#jobs-applications-list)

## [2.0.5] - 2022-11-22

### Added
- Add API to get meta categories such as Job Locations, Job Categories, etc [3.8. Meta Categories](#38-meta-categories)

## [2.0.4] - 2021-04-27

### Changed
- Support to show and hide your logo as well as your company's name

### Deprecated
- The field `is_show_logo` will be deleted in the future

### Note
- The field `is_show_logo` will be changed according to `is_anonymous`

## [2.0.3] - 2021-01-21

### Added
- Add API to get draft job form structure [Gets the draft job form’s details](#gets-the-draft-job-forms-details)
- Add API to post draft job [Creates a draft job post](#creates-a-draft-job-post)

## [2.0.2] - 2020-08-25

### Changed
- New list Job Level include: Entry Level, Experienced (non-manager), Manager, Director and above

## [2.0.1] - 2020-06-16

### Added
- Add API to create/read/update/delete Company Location [3.7 Company Location](#37-company-location)

### Changed
- Post / Edit Job required type working and working locations [3.7.1 List Of Company Location](#list-of-company-location)
- Job From Structure supported 3 working locations maximum

## [2.0.0] - 2019-05-30

### Added
- Add API to get list of Approved Skill ID [3.6 Listing Approved Skill Tags](#36-listing-approved-skill-tags)

### Changed
- Post / Edit Job required [3.6 Listing Approved Skill Tags](#36-listing-approved-skill-tags) 
- Post / Edit Job supported 5 skill tags maximum
- Job From Structure supported 5 skill tags maximum

### Deprecated
- [Gets the job form’s details (V1 / Will be deprecated)](#gets-the-job-forms-details-v1--will-be-deprecated)
- [Creates a job post (V1) / (Will be deprecated)](#creates-a-job-post-v1--will-be-deprecated)
- [Fully updates an online job post V1 / (Will be Deprecated)](#fully-updates-an-online-job-post-v1--will-be-deprecated)
- [Partially updates an online job post V1 / ( Will be Deprecated )](#partially-updates-an-online-job-post-v1---will-be-deprecated)
****

# Contents

- [Vietnamworks’s API documentation](#vietnamworkss-api-documentation)
- [Changelog](#changelog)
  - [[2.0.2] - 2020-08-25](#202---2020-08-25)
    - [Changed](#changed)
  - [[2.0.1] - 2020-06-16](#201---2020-06-16)
    - [Added](#added)
    - [Changed](#changed-1)
  - [[2.0.0] - 2019-05-30](#200---2019-05-30)
    - [Added](#added-1)
    - [Changed](#changed-2)
    - [Deprecated](#deprecated)
- [Contents](#contents)
  - [1. Overview](#1-overview)
      - [Vietnamworks agreement](#vietnamworks-agreement)
  - [2. Authentication](#2-authentication)
    - [2.1. Browser-based authentication](#21-browser-based-authentication)
  - [3. Resources](#3-resources)
    - [3.1. Job Form Structure](#31-job-form-structure)
      - [Gets the draft job form’s details](#gets-the-draft-job-forms-details)
      - [Gets the job form’s details (V3)](#gets-the-job-forms-details-v3)
      - [Gets the job form’s details (V2 / Will be deprecated)](#gets-the-job-forms-details-v2--will-be-deprecated)
      - [Gets the job form’s details (V1 / Will be deprecated)](#gets-the-job-forms-details-v1--will-be-deprecated)
    - [3.2. Job Listing and Job Details](#32-job-listing-and-job-details)
      - [Lists the employer’s online job posts](#lists-the-employers-online-job-posts)
      - [Jobs posting details](#jobs-posting-details)
      - [Job Applications](#jobs-applications-list)
    - [3.3. Posts a Job](#33-posts-a-job)
      - [Creates a draft job post](#creates-a-draft-job-post)
      - [Creates a job post (V3)](#creates-a-job-post-v3)
      - [Creates a job post (V2)](#creates-a-job-post-v2--will-be-deprecated)
      - [Creates a job post (V1) / (Will be deprecated)](#creates-a-job-post-v1--will-be-deprecated)
    - [3.4. Edits a Job](#34-edits-a-job)
      - [Fully updates an online job post (V3)](#fully-updates-an-online-job-post-v3)
      - [Fully updates an online job post (V2) / (Will be Deprecated)](#fully-updates-an-online-job-post-v2--will-be-deprecated)
      - [Partially updates an online job post (V3))](#partially-updates-an-online-job-post-v3)
      - [Partially updates an online job post (V2) / (Will be Deprecated)](#partially-updates-an-online-job-post-v2---will-be-deprecated)
      - [Fully updates an online job post V1 / (Will be Deprecated)](#fully-updates-an-online-job-post-v1--will-be-deprecated)
      - [Partially updates an online job post V1 / ( Will be Deprecated )](#partially-updates-an-online-job-post-v1---will-be-deprecated-)
    - [3.5. Activates/Deactivates a Job](#35-activatesdeactivates-a-job)
      - [Actives a job](#actives-a-job)
      - [Deactives job posting](#deactives-job-posting)
    - [3.6. Listing Approved Skill Tags](#36-listing-approved-skill-tags)
        - [Request](#request)
      - [Special Cases](#special-cases)
    - [3.7. Company Location](#37-company-location)
      - [3.7.1. List of company locations](#371-list-of-company-locations)
      - [Special Cases](#special-cases-1)
      - [3.7.2. Create a company location](#372-create-a-company-location)
      - [Special Cases](#special-cases-2)
      - [3.7.3. Update a company location](#373-update-a-company-location)
      - [Special Cases](#special-cases-3)
      - [3.7.4. Delete a company location](#374-delete-a-company-location)
      - [Special Cases](#special-cases-4)
    - [3.8. Meta Categories](#38-meta-categories)
      - [3.8.1. List of Job Levels](#381-list-of-job-levels)
      - [3.8.2. List of Job Categories](#382-list-of-job-categories)
      - [3.8.3. List of Job Locations](#383-list-of-job-locations)
      - [3.8.4. List of Job Working Types](#384-list-of-job-working-types)
      - [3.8.5. List of Company Benefits](#385-list-of-company-benefits)
      - [3.8.6. List of Job Salary Ranges](#386-list-of-job-salary-ranges)
      - [3.8.7. List of Company Industries](#387-list-of-company-industries)
      - [3.8.8. List of Job Functions](#388-list-of-job-functions)

  - [4. Testing](#4-testing)

## 1. Overview

Vietnamworks’s API is a JSON-based OAuth2 API. All requests are made to endpoints beginning with 
`https://api.vietnamworks.com/api/rest/v1`

All requests must be sent via secure connection, i.e. `https`, not `http`.

#### Vietnamworks agreement

By using Vietnamworks’s API, you agree to our [terms of service](http://employer.vietnamworks.com/terms_of_use.php).

## 2. Authentication

In order to publish on behalf of a VietnamWorks Employer account, you will need an access token. An access token grants limited access to a user’s account. We offer to acquire an access token by browser-based OAuth authentication.


### 2.1. Browser-based authentication

To be able to use these APIs you will need a consumer key which you can apply for it by filling <a href="http://www.vietnamworks.com/contact-us/feedback" target="_blank">VietnamWorks feedback form</a> with the details below:

- Topic: API Consumer Key
- Description contains these information:
 - Company Name: {Your Company Name}
 - Staging's redirect\_uri: {`redirect_uri` for your staging}
 - Production's redirect\_uri: {`redirect_uri` for your production}
 - Your employer's username(s) on staging (so that we will give this employer(s) some free services for testing)

Then we will email you a pair of `clientId` and `clientSecret` **on our staging environment** which later on you may use to access Vietnamworks’s API. Once the integration on staging is done we will issue another pair for production environment. Each integration should have its own `clientId` and `clientSecret`. The `clientSecret` should be treated like a password and stored securely.

After obtaining `clientId` and `clientSecret`, the first step is to acquire a short term authorization code by sending the user to our authorization URL so they can grant access to your integration (do this via pure browser such as chrome, firefox and all the others).

```
https://api.vietnamworks.com/oauth/v2/auth?client_id={{clientId}}
    &scope=jobpost
    &state={{state}}
    &response_type=code
    &redirect_uri={{redirectUri}}
```
Example:
```
https://api.vietnamworks.com/oauth/v2/auth?client_id=8_5utlrcculw8wss0gskg0sok0goksggoc8sk8soowwk84scc8wk
    &scope=jobpost&state=qazwsxedcrfv
    &response_type=code&redirect_uri=http://vietnamworks.local
```
With the following parameters:

| Parameter       | Type     | Required?  | Description                                     |
| -------------   |----------|------------|-------------------------------------------------|
| `client_id`     | string   | required   | The clientId we will supply you that identifies your integration. |
| `scope`         | string   | required   | The access that your integration is requesting, comma separated. Currently, there are two valid scope values, which are `jobview` and `jobpost`.|
| `state`         | string   | required   | Arbitrary text of your choosing, which we will repeat back to you to help you prevent request forgery. |
| `response_type` | string   | required   | The field currently has only one valid value, which is `code`.  |
| `redirect_uri`  | string   | required   | The URL where we will send the user after they have completed the login dialog. This must exactly match one of the callback URLs you provided when creating your app. This field should be URL encoded. |

The following scope values are valid:

| Scope              | Description                                                             | Extended |
| -------------------| ----------------------------------------------------------------------- | -------- |
| jobview       | Grants basic access to view job posting information related to the employer. This includes the [Job Listing API](#listing-the-employers-jobs-posting) and the [Job Details API](#jobs-posting-detail)    | No       |
| jobpost       | Currently grants the ability to manipulate all available APIs related job in VietnamWorks website    | No       |

Integrations are not permitted to request extended scope from users without explicit prior permission from Vietnamworks. Attempting to request these permissions through the standard user authentication flow will result in an error if extended scope has not been authorized for an integration.

![alt tag](http://farm2.staticflickr.com/1545/23813550532_3ace3780e4_b.jpg)
![alt tag](http://farm6.staticflickr.com/5635/23554127839_083929f6eb_b.jpg)

If the user grants your request for access, we will send them back to the specified `redirect_uri` with a state and code parameter:


```
{{redirectUri}}?state={{state}}
    &code={{code}}
```
Example:
```
http://vietnamworks.local/?state=qazwsxedcrfv&code=MzAwZDJjNGNhNDdhMzQ4NTY1MDMwNmExNmU5NWUzYTFjZmFhODUyNjc3MTQ1ODExZjMxZTVmOTg0M2NmMjZiMQ
```

With the following parameters:

| Parameter       | Type     | Required?  | Description                                     |
| -------------   |----------|------------|-------------------------------------------------|
| `state`         | string   | optional   | The arbitrary text you specified in the request.         |
| `code`          | string   | required   | A short-lived authorization code that may be exchanged for an access token. |

If the user declines access, we will send them back to the specified `redirect_uri` with an error parameter:

```
https://example.com/callback?error=access_denied
```

Once you have an short-lived authorization code, you may exchange it for a long-lived access token with which you can make authenticated requests on behalf of the user. To acquire an access token, make a form-encoded server-side GET request:

```
GET /oauth/v2/token HTTP/1.1
Host: api.vietnamworks.com
Content-Type: application/x-www-form-urlencoded
Accept: application/json
Accept-Charset: utf-8

code={{code}}&client_id={{client_id}}&client_secret={{client_secret}}&grant_type=authorization_code&redirect_uri={{redirect_uri}}
```
Example
```
https://api.vietnamworks.com/oauth/v2/token?client_id=8_5utlrcculw8wss0gskg0sok0goksggoc8sk8soowwk84scc8wk
    &client_secret=4ubvz8qf68sgkgowgcg0g84o48oo44oogo48gkw08k4okg4wo4
    &grant_type=authorization_code
    &redirect_uri=http://vietnamworks.local
    &code=MzAwZDJjNGNhNDdhMzQ4NTY1MDMwNmExNmU5NWUzYTFjZmFhODUyNjc3MTQ1ODExZjMxZTVmOTg0M2NmMjZiMQ
```

With the following parameters:

| Parameter       | Type     | Required?  | Description                                     |
| -------------   |----------|------------|-------------------------------------------------|
| `code`          | string   | required   | The short-lived authorization code you received in the previous step. |
| `client_id`     | string   | required   | Your integration’s `clientId` |
| `client_secret` | string   | required   | Your integration’s `clientSecret` |
| `grant_type`    | string   | required   | Currently the only accepted value is `authorization_code` |
| `redirect_uri`  | string   | required   | The same redirect_uri you specified when requesting for an authorization code. |

If successful, you will receive back an access token response:

```
HTTP/1.1 200 OK
Content-Type: application/json; charset=utf-8
{
    access_token: "MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA",
    expires_in: 2592000,
    token_type: "bearer",
    scope: "jobpost",
    refresh_token: "ZWMzYTNjYjMzZDkzOTYyNTEyNTUwZjdmMzMwOTIwM2RlOGU4MTgxNTNiNDMwNDg4OWY1ZGJmYzkwNDVhMGM3NA"
}
```

With the following parameters:

| Parameter       | Type         | Required?  | Description                                     |
| -------------   |--------------|------------|-------------------------------------------------|
| `token_type`    | string       | required   | The literal string "Bearer"                     |
| `access_token`  | string       | required   | A token that is valid for  `expires_in` seconds (default 2592000 seconds = 30 days) and can be used to perform authenticated requests on behalf of the user. |
| `refresh_token` | string       | required   | A token that does not expire which may be used to acquire a new `access_token`.                            |
| `scope`         | string array | required   | The scopes granted to your integration.         |
| `expires_in`    | int64        | required   | The timestamp in unix time specified when the access token will expire (in second, default 2592000)|

By defaul each access token is valid for 30 days. When an access token expires, you may request a new token using the refresh token. Refresh tokens do not expire. Both access tokens and refresh tokens may be revoked by the user at any time. **You must treat both access tokens and refresh tokens like passwords and store them securely.**

Access token and refresh token like this:

```
MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
```

To acquire a new access token using a refresh token, make the following form-encoded request:

```
GET /oauth/v2/token HTTP/1.1
Host: api.vietnamworks.com
Content-Type: application/x-www-form-urlencoded
Accept: application/json
Accept-Charset: utf-8

refresh_token={{refresh_token}}&client_id={{client_id}}
&client_secret={{client_secret}}&grant_type=refresh_token
```

With the following parameters:

| Parameter       | Type     | Required?  | Description                                     |
| -------------   |----------|------------|-------------------------------------------------|
| `refresh_token` | string   | required   | A valid refresh token.                          |
| `client_id`     | string   | required   | Your integration’s `clientId`                   |
| `client_secret` | string   | required   | Your integration’s `clientSecret`               |
| `grant_type`    | string   | required   | The literal string "refresh_token"              |

The response structure of this renew-token-request would be similar to the request-long-live-token request. **Notes that the new `refresh_token` will be issued, then the old one is not valid anymore.**

## 3. Resources

The API is RESTful and arranged around resources. All requests must be made with an integration token. All requests must be made using `https`.

### 3.1. Job Form Structure

#### Gets the draft job form’s details

Returns details of the job posting form that employer

```
GET https://api.vietnamworks.com/api/rest/v2/{employerId}/draft-jobs/new.json
```

Example request:

```
GET api/rest/v2/5564007/draft-jobs/new.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
```

The response is a Job Form object within a Job Posting Purchase Order data. You will use this data later for posting and editing job.

Example response:

```
HTTP/1.1 200 OK
Content-Type: application/json; charset=utf-8

{
  "code": 200,
  "form_view": {
     "job": {
    "job_title": {
           "name": "job_title",
           "required": true,
           "type": "text",
           "expanded": false,
           "multiple": false,
           "readonly": false,
           "max_length": 100
        },
        "job_level": {
           "name": "job_level",
           "required": true,
           "type": "choice",
           "expanded": false,
           "multiple": false,
           "values": [
              {
              "label": "New Grad/Entry Level/Internship",
              "value": "1",
              "data": 1
              },
            ...
          ],
          "readonly": false
        },
        ...
    }
  }
}
```

Where a Job Form object is:

| Field      | Type   | Required   | Max Length |   Description                           |
| -----------|--------|--------|--------|----------------------------------------------|
| job_title  | text | true | 100 | The title of the job posting.|
| job_level  | choice | true |  | The level of the job posting.                  |
| job_categories| choice | true |  | Industries of the job posting. Choose maximum 3 industries|
| job_category_orders  | text | true  |  | The list of industries separated by commas in order of display|
| job_locations| choice | true |  | Locations of the job posting. Choose maximum 3 cities|
| minimum_salary| text | true |  | Salary range from|
| maximum_salary| text | true |  | Salary range to|
| is_show_salary| radio  | true |  | Determines whether the salary should be shown on  VietnamWorks website or not|
| job_description | textarea  | true| 14500 | The  description of the job posting.|
| job_requirements| textarea | true| 14500 | The job posting requirements. |
| skill_tag1 | integer  | true | 100 | First skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag2 | integer  | false | 100 | Second skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag3 | integer  | false | 100 | Third skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag4 | integer  | false | 100 | Fourth skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag5 | integer  | false | 100 | Fifth skillId requirement of the job posting position. At least one approved skill tag is required. |
| company_name| text | true| 255 | The employer’s company name on Vietnamworks. |
| company_size | choice | true|  | Number of employees in employer company   |
| company_address | text | true|  | The employer company’s address. |
| company_profile | textarea | true| 10000 | Employer company information|
| company_benefit1 | benefit  | true |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| company_benefit2 | benefit  | false |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| company_benefit3 | benefit  | false |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| contact_name | text | true| 30 | The HR person who handles this job posting|
| is_show_contact | checkbox | false |  | Whether the `contact_name` is shown on job-seeker site or not.|
| email_for_application | text | true| 255 | The email to receive job applications|
| preferred_language  | choice | true|  | The resume's language that employer prefers when job-seeker applies|
| redirect_to  | text  | false| 255 | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| type_working_id  | choice | true |  | The type workings of the job posting|
| job_working_location1 | integer | required | |The first companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location2 | integer | optional | |The second companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location3 | integer | optional | |The third companyLocationId of the job working location. At lease one job working location is required. |

#### Gets the job form’s details (V3) 

**Scope:** `jobpost` only

Returns details of the job posting form that employer has granted permission to publish job posting service to VietnamWorks website.

```
GET https://api.vietnamworks.com/api/rest/v3/jobs/new.json
```

Example request:

```
GET api/rest/v3/jobs/new.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
```

The response is a Job Form object within a Job Posting Purchase Order data. You will use this data later for posting and editing job.

Example response:

```
HTTP/1.1 200 OK
Content-Type: application/json; charset=utf-8

{
  "code": 200,
  "form_view": {
     "job": {
    "job_title": {
           "name": "job_title",
           "required": true,
           "type": "text",
           "expanded": false,
           "multiple": false,
           "readonly": false,
           "max_length": 100
        },
        "job_level": {
           "name": "job_level",
           "required": true,
           "type": "choice",
           "expanded": false,
           "multiple": false,
           "values": [
              {
              "label": "New Grad/Entry Level/Internship",
              "value": "1",
              "data": 1
              },
            ...
          ],
          "readonly": false
        },
        ...
    }
  }
}
```

Where a Job Form object is:

| Field      | Type   | Required   | Max Length |   Description                           |
| -----------|--------|--------|--------|----------------------------------------------|
| job_title  | text | true | 100 | The title of the job posting.|
| job_level  | choice | true |  | The level of the job posting.                  |
| job_locations| choice | true |  | Locations of the job posting. Choose maximum 3 cities|
| minimum_salary| text | true |  | Salary range from|
| maximum_salary| text | true |  | Salary range to|
| is_show_salary| radio  | true |  | Determines whether the salary should be shown on  VietnamWorks website or not|
| job_description | textarea  | true| 14500 | The  description of the job posting.|
| job_requirements| textarea | true| 14500 | The job posting requirements. |
| skill_tag1 | integer  | true | 100 | First skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag2 | integer  | false | 100 | Second skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag3 | integer  | false | 100 | Third skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag4 | integer  | false | 100 | Fourth skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag5 | integer  | false | 100 | Fifth skillId requirement of the job posting position. At least one approved skill tag is required. |
| company_name| text | true| 255 | The employer’s company name on Vietnamworks. |
| company_size | choice | true|  | Number of employees in employer company   |
| company_address | text | true|  | The employer company’s address. |
| company_profile | textarea | true| 10000 | Employer company information|
| company_benefit1 | benefit  | true |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| company_benefit2 | benefit  | false |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| company_benefit3 | benefit  | false |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| contact_name | text | true| 30 | The HR person who handles this job posting|
| is_show_contact | checkbox | false |  | Whether the `contact_name` is shown on job-seeker site or not.|
| email_for_application | text | true| 255 | The email to receive job applications|
| preferred_language  | choice | true|  | The resume's language that employer prefers when job-seeker applies|
| redirect_to  | text  | false| 255 | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| job_posting_service  | choice  | true|  | The job posting service that employer purchased on Vietnamworks|
| type_working_id  | choice | true |  | The type workings of the job posting|
| job_working_location1 | integer | required | |The first companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location2 | integer | optional | |The second companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location3 | integer | optional | |The third companyLocationId of the job working location. At lease one job working location is required. |
| company_industry | integer | required | |Company Industry of the job posting. Choose maximum 1 industry. |
| job_function | integer | required | |Job Function of the job posting. Choose maximum 1 function. |

Possible errors:

| Error code           | Description                                     |
| ---------------------|-------------------------------------------------|
| 400 Bad request      | There is no available job posting service.      |
| 401 Unauthorized     | The `accessToken` is invalid or has been revoked. |

#### Gets the job form’s details (V2 / Will be deprecated) 

**Scope:** `jobpost` only

Returns details of the job posting form that employer has granted permission to publish job posting service to VietnamWorks website.

```
GET https://api.vietnamworks.com/api/rest/v2/jobs/new.json
```

Example request:

```
GET api/rest/v2/jobs/new.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
```

The response is a Job Form object within a Job Posting Purchase Order data. You will use this data later for posting and editing job.

Example response:

```
HTTP/1.1 200 OK
Content-Type: application/json; charset=utf-8

{
  "code": 200,
  "form_view": {
     "job": {
    "job_title": {
           "name": "job_title",
           "required": true,
           "type": "text",
           "expanded": false,
           "multiple": false,
           "readonly": false,
           "max_length": 100
        },
        "job_level": {
           "name": "job_level",
           "required": true,
           "type": "choice",
           "expanded": false,
           "multiple": false,
           "values": [
              {
              "label": "New Grad/Entry Level/Internship",
              "value": "1",
              "data": 1
              },
            ...
          ],
          "readonly": false
        },
        ...
    }
  }
}
```

Where a Job Form object is:

| Field      | Type   | Required   | Max Length |   Description                           |
| -----------|--------|--------|--------|----------------------------------------------|
| job_title  | text | true | 100 | The title of the job posting.|
| job_level  | choice | true |  | The level of the job posting.                  |
| job_categories| choice | true |  | Industries of the job posting. Choose maximum 3 industries|
| job_category_orders  | text | true  |  | The list of industries separated by commas in order of display|
| job_locations| choice | true |  | Locations of the job posting. Choose maximum 3 cities|
| minimum_salary| text | true |  | Salary range from|
| maximum_salary| text | true |  | Salary range to|
| is_show_salary| radio  | true |  | Determines whether the salary should be shown on  VietnamWorks website or not|
| job_description | textarea  | true| 14500 | The  description of the job posting.|
| job_requirements| textarea | true| 14500 | The job posting requirements. |
| skill_tag1 | integer  | true | 100 | First skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag2 | integer  | false | 100 | Second skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag3 | integer  | false | 100 | Third skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag4 | integer  | false | 100 | Fourth skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag5 | integer  | false | 100 | Fifth skillId requirement of the job posting position. At least one approved skill tag is required. |
| company_name| text | true| 255 | The employer’s company name on Vietnamworks. |
| company_size | choice | true|  | Number of employees in employer company   |
| company_address | text | true|  | The employer company’s address. |
| company_profile | textarea | true| 10000 | Employer company information|
| company_benefit1 | benefit  | true |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| company_benefit2 | benefit  | false |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| company_benefit3 | benefit  | false |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| contact_name | text | true| 30 | The HR person who handles this job posting|
| is_show_contact | checkbox | false |  | Whether the `contact_name` is shown on job-seeker site or not.|
| email_for_application | text | true| 255 | The email to receive job applications|
| preferred_language  | choice | true|  | The resume's language that employer prefers when job-seeker applies|
| redirect_to  | text  | false| 255 | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| job_posting_service  | choice  | true|  | The job posting service that employer purchased on Vietnamworks|
| type_working_id  | choice | true |  | The type workings of the job posting|
| job_working_location1 | integer | required | |The first companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location2 | integer | optional | |The second companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location3 | integer | optional | |The third companyLocationId of the job working location. At lease one job working location is required. |

Possible errors:

| Error code           | Description                                     |
| ---------------------|-------------------------------------------------|
| 400 Bad request      | There is no available job posting service.      |
| 401 Unauthorized     | The `accessToken` is invalid or has been revoked. |

#### Gets the job form’s details (V1 / Will be deprecated) 

**Scope:** `jobpost` only

Returns details of the job posting form that employer has granted permission to publish job posting service to VietnamWorks website.

```
GET https://api.vietnamworks.com/api/rest/v1/jobs/new.json
```

Example request:

```
GET api/rest/v1/jobs/new.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
```

The response is a Job Form object within a Job Posting Purchase Order data. You will use this data later for posting and editing job.

Example response:

```
HTTP/1.1 200 OK
Content-Type: application/json; charset=utf-8

{
  "code": 200,
  "form_view": {
     "job": {
    "job_title": {
           "name": "job_title",
           "required": true,
           "type": "text",
           "expanded": false,
           "multiple": false,
           "readonly": false,
           "max_length": 100
        },
        "job_level": {
           "name": "job_level",
           "required": true,
           "type": "choice",
           "expanded": false,
           "multiple": false,
           "values": [
              {
              "label": "New Grad/Entry Level/Internship",
              "value": "1",
              "data": 1
              },
            ...
          ],
          "readonly": false
        },
        ...
    }
  }
}
```

Where a Job Form object is:

| Field      | Type   | Required   | Max Length |Description                               |
| -----------|--------|--------|--------|----------------------------------------------|
| job_title  | text | true | 100 | The title of the job posting.|
| job_level  | choice | true |  | The level of the job posting.                  |
| job_categories| choice | true |  | Industries of the job posting. Choose maximum 3 industries|
| job_category_orders  | text | true  |  | The list of industries separated by commas in order of display|
| job_locations| choice | true |  | Locations of the job posting. Choose maximum 3 cities|
| minimum_salary| text | true |  | Salary range from|
| maximum_salary| text | true |  | Salary range to|
| is_show_salary| radio  | true |  | Determines whether the salary should be shown on  VietnamWorks website or not|
| job_description | textarea  | true| 14500 | The  description of the job posting.|
| job_requirements| textarea | true| 14500 | The job posting requirements. |
| skill_tag1 | text  | true | 100 | First skill requirement for the job posting position. |
| skill_tag2 | text  | false | 100 | Second skill requirement for the job posting position. |
| skill_tag3 | text  | false | 100 | Third skill requirement for the job posting position. |
| skill_tag4 | text  | false | 100 | Fourth skill requirement for the job posting position. |
| skill_tag5 | text  | false | 100 | Fifth skill requirement for the job posting position. |
| company_name| text | true| 255 | The employer’s company name on Vietnamworks. |
| company_size | choice | true|  | Number of employees in employer company   |
| company_address | text | true|  | The employer company’s address. |
| company_profile | textarea | true| 10000 | Employer company information|
| company_benefit1 | benefit  | true |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| company_benefit2 | benefit  | false |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| company_benefit3 | benefit  | false |  | benefit_id choice, benefit_description text to show what benefit the comapany provides|
| contact_name | text | true| 30 | The HR person who handles this job posting|
| is_show_contact | checkbox | false |  | Whether the `contact_name` is shown on job-seeker site or not.|
| email_for_application | text | true| 255 | The email to receive job applications|
| preferred_language  | choice | true|  | The resume's language that employer prefers when job-seeker applies|
| redirect_to  | text  | false| 255 | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| job_posting_service  | choice  | true|  | The job posting service that employer purchased on Vietnamworks|
| type_working_id  | choice | true | 100 | The type workings of the job posting|
| job_working_location1 | text  | true |  | location_id choice|
| job_working_location2 | text  | false |  | location_id choice|
| job_working_location3 | text  | false |  | location_id choice|

Possible errors:

| Error code           | Description                                     |
| ---------------------|-------------------------------------------------|
| 400 Bad request      | There is no available job posting service.      |
| 401 Unauthorized     | The `accessToken` is invalid or has been revoked. |

### 3.2. Job Listing and Job Details

#### Lists the employer’s online job posts

**Scope:** Both `jobpost` and `jobview`


This REST API endpoint exposes the list of approved job posting as a collection of resources under the employer. A request to fetch a list of approved job posting for a employer looks like this:

```
GET https://api.vietnamworks.com/api/rest/v1/jobs/online.json
```

The response is a list of approved job posting objects (this endpoint offers a set of data similar to what you will see at http://employer.vietnamworks.com/beta/job/default/index when logged in). An empty array is returned if employer doesn’t have relations to any approved job posting. The response array is wrapped in a data envelope.

Example response:

```
HTTP/1.1 200 OK
Content-Type: application/json; charset=utf-8

{
  "code": 200,
  "jobs": {
     "data": [
        {
           "job_title": "Sales Executive - Japanese Business Unit",
           "job_description": "Develop an extensive customer database, especially Japanese clients.",
           "job_requirements": "Good written and spoken English is Essential.",
           "company_name": "Vietnamworks",
           "company_size_id": 4,
           "company_profile": "VietnamWorks is Vietnam's #1 online service for professionals looking for jobs and employers looking for talent.",
           "email_for_application": "son.tran@navigosgroup.com",
           "contact_name": "Tran Thai Son",
           "company_address": "130 Suong Nguyet Anh",
           "created_date": "2015-12-09T14:32:56+07:00",
           "duration_days": 30,
           "expired_date": "2016-01-15T23:59:59+07:00",
           "approved_date": "2015-12-16T17:06:46+07:00",
           "last_updated_date": "2015-12-16T17:06:46+07:00",
           "company_id": 201114,
           "num_of_views": 0,
           ...
           "is_show_contact": true,
           "redirect_to": "http://careers.rmit.edu.vn/vn/en/listing",
           "unformatted_job_title": "Sales Executive - Japanese Business Unit",
           "alias": "sales-executive-japanese-business-unit-19",
           "unformatted_company_name": "Vietnamworks",
           "id": 561451
        }
      ]
  }
}
```

Where a Job Posting object is:

| Field       | Type   | Description                                     |
| ------------|--------|-------------------------------------------------|
| id          | string | The unique identifier for the job posting.        |
| job_title   | string | The job title on VietnamWorks.        |
| job_description | string | Short description of the job posting.           |
| job_requirements | string | The requirements of the job posting.           |
| company_name | string | The company name to show on Vietnamworks. |
| company_size_id | number | Number of employees in employer company. |
| company_profile | string | Employer company information.           |
| email_for_application | string | The email to receive job applications.           |
| contact_name | string | The HR person who handles this job posting.|
| company_address | string | The employer company’s address.           |
| created_date | timestamp | Created date of the job posting.           |
| duration_days | number | The number of days that the job posting is shown on job-seeker site.           |
| expired_date | timestamp | Expired date of the job posting.           |
| approved_date | timestamp | Approved date of the job posting. Aka start date when the job is online.           |
| last_updated_date | timestamp | Lastest update date of the job posting.           |
| company_id | string | The unique identifier of the company.           |
| num_of_views | number | Number of views.          |
| preferred_language_id | string | The resume's language id which employer prefers when job-seeker applies.           |
| salary_max | number | Max salary |
| salary_min | number | Min salary |
| job_level_id | number | The level id of the job posting.           |
| is_show_contact | boolean | Whether the `contact_name` is shown on job-seeker site or not.           |
| unformatted_job_title | string | The job title provided by employer.           |
| alias | string | The unique alias which is generated based on the job title of the job posting.           |
| unformatted_company_name | string | The company name provided by employer.|
| num_of_applications | number | Number of applications.           |
| job_locations | array | Array of locations of the job posting |
| job_categories | array | Array of industries of the job posting |
| company_benefits | array | Array of benefits of the company |
| skill_tags | array | Array of skill tags of the job posting |
| redirect_to  | string  | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| skill_tags | array | Array of skill tags of the job posting |

Possible errors:

| Error code           | Description                                                                           |
| ---------------------|---------------------------------------------------------------------------------------|
| 401 Unauthorized     | The `accessToken` is invalid, lacks the `listJobPosting` scope or has been revoked. |
| 401 Forbidden        | The request attempts to list publications for another user.                           |

#### Jobs posting details

**Scope:** Both `jobpost` and `jobview`

Returns the details of a single approved job posting of the authenticated employer. This endpoint offers a set of data similar to what you’ll see at http://employer.vietnamworks.com/beta/job-posting/edit-job/{jobId} when logged in.

The REST API endpoint exposes this approved job posting as a resources under the employer. A request to fetch a approved job posting for a employer looks like this:

```
GET https://api.vietnamworks.com/api/rest/v1/jobs/{jobId}.json
```

The response is a full details of the approved job posting objects. 

Example response:

```
HTTP/1.1 200 OK
Content-Type: application/json; charset=utf-8
{
  code: 200,
  job: {
      "job_title": "Sales Executive - Japanese Business Unit",
      "salary_range_id": 0,
      "job_description": "Develop an extensive customer database, especially Japanese clients.",
      "job_requirements": "Good written and spoken English is Essential.",
      "company_name": "Vietnamworks",
      "company_size_id": 4,
      "company_profile": "VietnamWorks is Vietnam's #1 online service for professionals looking for jobs and employers looking for talent.",
      "email_for_application": "son.tran@navigosgroup.com",
      "contact_name": "Tran Thai Son",
      "company_address": "130 Suong Nguyet Anh",
      "created_date": "2015-12-09T14:32:56+07:00",
      "duration_days": 30,
      "expired_date": "2016-01-15T23:59:59+07:00",
      "approved_date": "2015-12-16T17:06:46+07:00",
      "last_updated_date": "2015-12-16T17:06:46+07:00",
      ...
      "company_id": 201114,
      "num_of_views": 0,
      "preferred_language_id": 2,
      "is_show_logo": 0,
      "salary_max": 1000,
      "salary_min": 700,
      "job_level_id": 5,
      "is_show_contact": true,
      "redirect_to": "http://careers.rmit.edu.vn/vn/en/listing",
      "unformatted_job_title": "Sales Executive - Japanese Business Unit",
      "alias": "sales-executive-japanese-business-unit-19",
      "unformatted_company_name": "Vietnamworks",
      "id": 561451,
      "type_working_id": 1,
      "job_locations": [
          "11 Đoàn Kết, Binh Tho, Thủ Đức, Ho Chi Minh City, Vietnam"
      ]
  }
}
```

Where a Job Posting object is:

| Field       | Type   | Description                                     |
| ------------|--------|-------------------------------------------------|
| id          | string | The unique identifier of the job posting.        |
| job_title   | string | The job title on Vietnamworks.        |
| job_description | string | The description of the job posting.           |
| job_requirements | string | The job requirements.           |
| company_name | string | The employer’s company name on Vietnamworks. |
| company_size_id | string | Number of employees in employer company. |
| company_profile | string | Employer company information.           |
| email_for_application | string | The email to receive job applications.           |
| contact_name | string | The HR person who handles the job posting.|
| company_address | string | The employer company’s address.           |
| created_date | string | Created date of the job posting.           |
| duration_days | string | The number of days that the job posting is shown on job-seeker site.           |
| expired_date | timestamp | Expired date of the job posting.           |
| approved_date | timestamp | Approved date of the job posting. Aka start date when the job is online.           |
| last_updated_date | timestamp | Lastest update date of the job posting.           |
| company_id | string | The unique identifier of the company.           |
| num_of_views | string | Number of views           |
| preferred_language_id | string | The resume's language id that employer prefers when job-seeker applies.           |
| salary_max | string | Max Salary |
| salary_min | string | Min Salary |
| job_level_id | string | The level id of the job posting.           |
| is_show_contact | string | Whether the `contact_name` is shown on job-seeker site or not.           |
| unformatted_job_title | string | The job posting’s title provide by employer.           |
| alias | string | The unique alias which is generated based on the job title of the job posting.         |
| unformatted_company_name | string | The company name provided by employer.|
| num_of_applications | number | Number of applications         |
| job_locations | array | Array of locations of the job posting |
| job_categories | array | Array of industries of the job posting |
| company_benefits | array | Array of benefits of the company |
| skill_tags | array | Array of skill tags of the job posting |
| redirect_to  | string  | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| type_working_id | integer | The unique identifier of the type working.           |
| job_locations | array | Array of job location of the job posting.           |

Possible errors:

| Error code           | Description                                                                           |
| ---------------------|---------------------------------------------------------------------------------------|
| 401 Unauthorized     | The `accessToken` is invalid. |
| 403 Forbidden        | Lacks the `jobview` scope or has been revoked. |
| 404 Not Found        | The `jobId` is invalid or not yours job. |

#### Job's Applications list

```
GET https://api.vietnamworks.com/api/rest/v1/applications/{jobId}?page=1&lang=1
```

Parameters Query:
| Field | Type | Description |
| ------------|--------|-------------------------------------------------|
| jobId | int | Job ID. |
| page | int | Current page. |
| lang | int | Language ID. `1:VN` `2 EN`. |

The response is a full details of the response.
Example response:

```
HTTP/1.1 200 OK
Content-Type: application/json; charset=utf-8
{
  "code": 200,
  "data": {
    "items": [
      {
        "email": "x7@yopmail.com",
        "jobTitle": "Engineering",
        "expectedPosition": "Engineering",
        "mostRecentJobTitle": "5000 characters remaining 1",
        "fullName": "fffq sevent online",
        "createdOn": "2022-12-08 18:23:54",
        "yearsExperience": "22",
        "resumeTitle": "Engineering",
        "avatar": "https://staging-images.vietnamworks.com/pictureofresume/f8/1659690228172164182.png",
        "cellphone": "+84-777666666",
        "statusName": "Receive resume",
	"linkDetail": "https://staging-employer.vietnamworks.com/v2/application/detail/2/10252239",
        "linkDownload": "https://staging-employer.vietnamworks.com/api/external/application/download/10252239"
      }
    ],
    "page": 1,
    "total": 1
  }
}
```

Candidate Object Item:
| Field | Type | Description |
| ------------|--------|-------------------------------------------------|
| email | string | The email of candidate. |
| jobTitle | string | The job title on Vietnamworks. |
| expectedPosition | string | The expected position of candidate. |
| mostRecentJobTitle | string | The candidate's most recent job title. |
| fullName | string | The candidate's name. |
| applyOn | string | Candidate's apply time. |
| yearsExperience | string | Candidate experience. |
| resumeTitle | string | Resume title of candidate on vietnamworks site |
| avatar | string | Candidate's avatar.|
| cellphone | string | Candidate's cellphone. |
| statusName | string | Candidate's current hiring process status. |
| linkDetail | string | Candidate's detail page URL. |
| linkDownload | string | Downloadable link. |

Possible Errors:
| Status | Description |
| ------------|--------|
|401 Unauthorized | The `accessToken` is invalid.|
|403 Forbidden | Lacks the `jobview` scope or has been revoked. |
|404 Not Found | The `jobId` is invalid or not yours job. |


### 3.3. Posts a Job

#### Creates a draft job post

Creates a draft job posting (used by internal CRM Team only)

```
POST https://api.vietnamworks.com/api/rest/v2/{employerId}/draft-jobs.json 
```

Example request:

```
POST /api/rest/v2/5564007/draft-jobs.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
{
    "job": {
        "job_title": "Fresher Software Test Engineer",
        "job_level": 5,
        "job_categories": [
            35,
            70
        ],
        "job_category_orders": "35,70",
        "job_locations": [
            29,
            24
        ],
        "minimum_salary": 700,
        "maximum_salary": 1000,
        "is_show_salary": 1,
        "job_description": "Analyze system and software requirements",
        "job_requirements": "Bachelor degree or above in Electrical Engineering or equivalent",
        "skill_tag1": 205,
        "skill_tag2": 207,
        "skill_tag3": 2628,
        "skill_tag4": 6520,
        "skill_tag5": 7103,
        "company_name": "VietnamWorks",
        "company_size": 4,
        "company_address": "10th Floor, Golden Tower, 6 Nguyen Thi Minh Khai, District 1, HCM City.",
        "company_profile": "VietnamWorks is Vietnam's #1 online service for professionals looking for jobs and employers looking for talent.",
        "company_benefit1": {
            "benefit_id": 1,
            "benefit_desc": "12 days annual leave"
        },
        "contact_name": "HR Department",
        "is_show_contact": 1,
        "email_for_application": "lan.bui@navigosgroup.com",
        "preferred_language": 2,
        "redirect_to": "http://careers.rmit.edu.vn/vn/en/listing",
        "type_working_id": 1,
        "job_working_location1": 446,
        "job_working_location2": 379,
        "job_working_location3": 459
    }
}
```

With the following fields:

| Parameter       | Type         | Required?  | Description                                     |
| -------------   |--------------|------------|-------------------------------------------------|
| job_title           | string       | required   | The title of the job posting.|
| job_level   | integer       | required   | The job level of the job posting |
| job_categories | integer array | required   | The industries of the job posting. At least one industry is required and maximum of 3.  |
| job_category_orders  | integer array | required  | The order of `job_categories` list |
| job_locations | integer array | required   | Working cities of the job. At least one city is required and maximum of 3.  |
| minimum_salary | integer | required | Salary range from in USD, which is greater than 1 and less than or equal to than `maximum_salary` |
| maximum_salary | integer | required | Salary range to in USD, which is greater than 1 and greater than or equal to `maximum_salary` |
| is_show_salary | integer | required | Determines whether the salary should be shown on  VietnamWorks website or not. The accepted value is [0,1] |
| job_description | string | required | The description of the job posting. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| job_requirements | string | required | The job posting requirements. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| skill_tag1 | integer | required | First skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag2 | integer | optional | Second skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| skill_tag3 | integer | optional | Third skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| skill_tag4 | integer | optional | Fourth skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| skill_tag5 | integer | optional | Fifth skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| company_name | string | required | The employer’s company name on Vietnamworks. |
| company_size | integer | optional | Number of employees in employer company |
| company_address | string | optional | The employer company’s address |
| company_profile | string | required | The employer company information. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| company_benefit1 | benefit | required | The first `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit2 | benefit | optional | The second `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit3 | benefit | optional | The third `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| contact_name | string | required | The HR person who handles the job posting.|
| is_show_contact | checkbox | required | Whether the `contact_name` is shown on job-seeker site or not.  |
| email_for_application | string | required | The email to receive job applications. |
| preferred_language | integer | required | The resume's language that employer prefers when job-seeker applies |
| redirect_to  | string | optional | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| type_working_id | integer | required | The type working id that type workings on VietnamWorks |
| job_working_location1 | integer | required | The first companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location2 | integer | optional | The second companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location3 | integer | optional | The third companyLocationId of the job working location. At lease one job working location is required. |

The response is a location header that points to the URL of the newly created job. Example response:

```
HTTP/1.1 201 Created
Content-Type: application/json; charset=utf-8
Location: /api/rest/v1/jobs/578189
```

Possible errors:

| Error code           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| 400 Bad Request      | Required fields were invalid, or not specified. Or there is no available job posting service.
| 404 Not Found        | The `jobId` is invalid or not yours job. |

#### Creates a job post (V3)

**Scope:** `jobpost` only

Creates a job posting on behalf of the authenticated user.

```
POST https://api.vietnamworks.com/api/rest/v3/jobs.json 
```

Example request:

```
POST /api/rest/v3/jobs.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
{
    "job": {
        "job_title": "Fresher Software Test Engineer",
        "job_level": 5,
        "job_locations": [
            29,
            24
        ],
        "minimum_salary": 700,
        "maximum_salary": 1000,
        "is_show_salary": 1,
        "job_description": "Analyze system and software requirements",
        "job_requirements": "Bachelor degree or above in Electrical Engineering or equivalent",
        "skill_tag1": 205,
        "skill_tag2": 207,
        "skill_tag3": 2628,
        "skill_tag4": 6520,
        "skill_tag5": 7103,
        "company_name": "VietnamWorks",
        "company_size": 4,
        "company_address": "10th Floor, Golden Tower, 6 Nguyen Thi Minh Khai, District 1, HCM City.",
        "company_profile": "VietnamWorks is Vietnam's #1 online service for professionals looking for jobs and employers looking for talent.",
        "company_benefit1": {
            "benefit_id": 1,
            "benefit_desc": "12 days annual leave"
        },
        "contact_name": "HR Department",
        "is_show_contact": 1,
        "email_for_application": "lan.bui@navigosgroup.com",
        "preferred_language": 2,
        "redirect_to": "http://careers.rmit.edu.vn/vn/en/listing",
        "job_posting_service": 123,
        "type_working_id": 1,
        "job_working_location1": 446,
        "job_working_location2": 379,
        "job_working_location3": 459,
        "is_anonymous": 1,
        "is_show_logo": 0,
        "company_industry": 1,
        "job_function": 2
    }
}
```

With the following fields:

| Parameter       | Type         | Required?  | Description                                     |
| -------------   |--------------|------------|-------------------------------------------------|
| job_title           | string       | required   | The title of the job posting.|
| job_level   | integer       | required   | The job level of the job posting |
| job_locations | integer array | required   | Working cities of the job. At least one city is required and maximum of 3.  |
| minimum_salary | integer | required | Salary range from in USD, which is greater than 1 and less than or equal to than `maximum_salary` |
| maximum_salary | integer | required | Salary range to in USD, which is greater than 1 and greater than or equal to `maximum_salary` |
| is_show_salary | integer | required | Determines whether the salary should be shown on  VietnamWorks website or not. The accepted value is [0,1] |
| job_description | string | required | The description of the job posting. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| job_requirements | string | required | The job posting requirements. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| skill_tag1 | integer | required | First skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag2 | integer | optional | Second skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| skill_tag3 | integer | optional | Third skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| skill_tag4 | integer | optional | Fourth skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| skill_tag5 | integer | optional | Fifth skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| company_name | string | required | The employer’s company name on Vietnamworks. |
| company_size | integer | optional | Number of employees in employer company |
| company_address | string | optional | The employer company’s address |
| company_profile | string | required | The employer company information. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| company_benefit1 | benefit | required | The first `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit2 | benefit | optional | The second `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit3 | benefit | optional | The third `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| contact_name | string | required | The HR person who handles the job posting.|
| is_show_contact | checkbox | required | Whether the `contact_name` is shown on job-seeker site or not.  |
| email_for_application | string | required | The email to receive job applications. |
| preferred_language | integer | required | The resume's language that employer prefers when job-seeker applies |
| redirect_to  | string | optional | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| job_posting_service | integer | required | The job posting service id that employer purchased on VietnamWorks |
| type_working_id | integer | required | The type working id that type workings on VietnamWorks |
| job_working_location1 | integer | required | The first companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location2 | integer | optional | The second companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location3 | integer | optional | The third companyLocationId of the job working location. At lease one job working location is required. |
| is_show_logo | integer | required | Show or hide logo of the your company for the job. |
| is_anonymous | integer | required | Show or hide logo and name of your company for the job. |
| company_industry | integer | required | Company Industry of the job posting. Choose maximum 1 industry. |
| job_function | integer | required | Job Function of the job posting. Choose maximum 1 function. |

The response is a location header that points to the URL of the newly created job. Example response:

```
HTTP/1.1 201 Created
Content-Type: application/json; charset=utf-8
Location: /api/rest/v1/jobs/578189
```

Possible errors:

| Error code           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| 400 Bad Request      | Required fields were invalid, or not specified. Or there is no available job posting service.                                                                          |
| 401 Unauthorized     | The access token is invalid or has been revoked.                                                                     |
| 403 Forbidden        | The user does not have permission to publish. |
| 404 Not Found        | The `jobId` is invalid or not yours job. |

#### Creates a job post (V2)  / (Will be deprecated)

**Scope:** `jobpost` only

Creates a job posting on behalf of the authenticated user.

```
POST https://api.vietnamworks.com/api/rest/v2/jobs.json 
```

Example request:

```
POST /api/rest/v2/jobs.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
{
    "job": {
        "job_title": "Fresher Software Test Engineer",
        "job_level": 5,
        "job_categories": [
            35,
            70
        ],
        "job_category_orders": "35,70",
        "job_locations": [
            29,
            24
        ],
        "minimum_salary": 700,
        "maximum_salary": 1000,
        "is_show_salary": 1,
        "job_description": "Analyze system and software requirements",
        "job_requirements": "Bachelor degree or above in Electrical Engineering or equivalent",
        "skill_tag1": 205,
        "skill_tag2": 207,
        "skill_tag3": 2628,
        "skill_tag4": 6520,
        "skill_tag5": 7103,
        "company_name": "VietnamWorks",
        "company_size": 4,
        "company_address": "10th Floor, Golden Tower, 6 Nguyen Thi Minh Khai, District 1, HCM City.",
        "company_profile": "VietnamWorks is Vietnam's #1 online service for professionals looking for jobs and employers looking for talent.",
        "company_benefit1": {
            "benefit_id": 1,
            "benefit_desc": "12 days annual leave"
        },
        "contact_name": "HR Department",
        "is_show_contact": 1,
        "email_for_application": "lan.bui@navigosgroup.com",
        "preferred_language": 2,
        "redirect_to": "http://careers.rmit.edu.vn/vn/en/listing",
        "job_posting_service": 123,
        "type_working_id": 1,
        "job_working_location1": 446,
        "job_working_location2": 379,
        "job_working_location3": 459,
        "is_anonymous": 1,
        "is_show_logo": 0
    }
}
```

With the following fields:

| Parameter       | Type         | Required?  | Description                                     |
| -------------   |--------------|------------|-------------------------------------------------|
| job_title           | string       | required   | The title of the job posting.|
| job_level   | integer       | required   | The job level of the job posting |
| job_categories | integer array | required   | The industries of the job posting. At least one industry is required and maximum of 3.  |
| job_category_orders  | integer array | required  | The order of `job_categories` list |
| job_locations | integer array | required   | Working cities of the job. At least one city is required and maximum of 3.  |
| minimum_salary | integer | required | Salary range from in USD, which is greater than 1 and less than or equal to than `maximum_salary` |
| maximum_salary | integer | required | Salary range to in USD, which is greater than 1 and greater than or equal to `maximum_salary` |
| is_show_salary | integer | required | Determines whether the salary should be shown on  VietnamWorks website or not. The accepted value is [0,1] |
| job_description | string | required | The description of the job posting. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| job_requirements | string | required | The job posting requirements. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| skill_tag1 | integer | required | First skillId requirement of the job posting position. At least one approved skill tag is required. |
| skill_tag2 | integer | optional | Second skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| skill_tag3 | integer | optional | Third skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| skill_tag4 | integer | optional | Fourth skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| skill_tag5 | integer | optional | Fifth skillId requirement of the job posting position.  At least one approved  skill tag is required. |
| company_name | string | required | The employer’s company name on Vietnamworks. |
| company_size | integer | optional | Number of employees in employer company |
| company_address | string | optional | The employer company’s address |
| company_profile | string | required | The employer company information. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| company_benefit1 | benefit | required | The first `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit2 | benefit | optional | The second `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit3 | benefit | optional | The third `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| contact_name | string | required | The HR person who handles the job posting.|
| is_show_contact | checkbox | required | Whether the `contact_name` is shown on job-seeker site or not.  |
| email_for_application | string | required | The email to receive job applications. |
| preferred_language | integer | required | The resume's language that employer prefers when job-seeker applies |
| redirect_to  | string | optional | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| job_posting_service | integer | required | The job posting service id that employer purchased on VietnamWorks |
| type_working_id | integer | required | The type working id that type workings on VietnamWorks |
| job_working_location1 | integer | required | The first companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location2 | integer | optional | The second companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location3 | integer | optional | The third companyLocationId of the job working location. At lease one job working location is required. |
| is_show_logo | integer | required | Show or hide logo of the your company for the job. |
| is_anonymous | integer | required | Show or hide logo and name of your company for the job. |

The response is a location header that points to the URL of the newly created job. Example response:

```
HTTP/1.1 201 Created
Content-Type: application/json; charset=utf-8
Location: /api/rest/v1/jobs/578189
```

Possible errors:

| Error code           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| 400 Bad Request      | Required fields were invalid, or not specified. Or there is no available job posting service.                                                                          |
| 401 Unauthorized     | The access token is invalid or has been revoked.                                                                     |
| 403 Forbidden        | The user does not have permission to publish. |
| 404 Not Found        | The `jobId` is invalid or not yours job. |

#### Creates a job post (V1) / (Will be deprecated)

**Scope:** `jobpost` only

Creates a job posting on behalf of the authenticated user.

```
POST https://api.vietnamworks.com/api/rest/v1/jobs.json 
```

Example request:

```
POST /api/rest/v1/jobs.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
{
    "job": {
        "job_title": "Fresher Software Test Engineer",
        "job_level": 5,
        "job_categories": [
            35,
            70
        ],
        "job_category_orders": "35,70",
        "job_locations": [
            29,
            24
        ],
        "minimum_salary": 700,
        "maximum_salary": 1000,
        "is_show_salary": 1,
        "job_description": "Analyze system and software requirements",
        "job_requirements": "Bachelor degree or above in Electrical Engineering or equivalent",
        "skill_tag1": "English Advanced",
        "skill_tag2": "Embedded - C/C++ ",
        "skill_tag3": "QA/QC",
        "company_name": "VietnamWorks",
        "company_size": 4,
        "company_address": "10th Floor, Golden Tower, 6 Nguyen Thi Minh Khai, District 1, HCM City.",
        "company_profile": "VietnamWorks is Vietnam's #1 online service for professionals looking for jobs and employers looking for talent.",
        "company_benefit1": {
            "benefit_id": 1,
            "benefit_desc": "12 days annual leave"
        },
        "contact_name": "HR Department",
        "is_show_contact": 1,
        "email_for_application": "lan.bui@navigosgroup.com",
        "preferred_language": 2,
        "redirect_to": "http://careers.rmit.edu.vn/vn/en/listing",
        "job_posting_service": 123,
        "type_working_id": 1,
        "job_working_location1": 446,
        "job_working_location2": 379,
        "job_working_location3": 459
    }
}
```

With the following fields:

| Parameter       | Type         | Required?  | Description                                     |
| -------------   |--------------|------------|-------------------------------------------------|
| job_title           | string       | required   | The title of the job posting.|
| job_level   | integer       | required   | The job level of the job posting |
| job_categories | integer array | required   | The industries of the job posting. At least one industry is required and maximum of 3.  |
| job_category_orders  | integer array | required  | The order of `job_categories` list |
| job_locations | integer array | required   | Working cities of the job. At least one city is required and maximum of 3.  |
| minimum_salary | integer | required | Salary range from in USD, which is greater than 1 and less than or equal to than `maximum_salary` |
| maximum_salary | integer | required | Salary range to in USD, which is greater than 1 and greater than or equal to `maximum_salary` |
| is_show_salary | integer | required | Determines whether the salary should be shown on  VietnamWorks website or not. The accepted value is [0,1] |
| job_description | string | required | The description of the job posting. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| job_requirements | string | required | The job posting requirements. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| skill_tag1 | string | optional | First skill requirement of the job posting position. At least one skill tag is required. |
| skill_tag2 | string | optional | Second skill requirement of the job posting position.  At least one skill tag is required. |
| skill_tag3 | string | optional | Third skill requirement of the job posting position.  At least one skill tag is required. |
| company_name | string | required | The employer’s company name on Vietnamworks. |
| company_size | integer | optional | Number of employees in employer company |
| company_address | string | optional | The employer company’s address |
| company_profile | string | required | The employer company information. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| company_benefit1 | benefit | required | The first `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit2 | benefit | optional | The second `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit3 | benefit | optional | The third `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| contact_name | string | required | The HR person who handles the job posting.|
| is_show_contact | checkbox | required | Whether the `contact_name` is shown on job-seeker site or not.  |
| email_for_application | string | required | The email to receive job applications. |
| preferred_language | integer | required | The resume's language that employer prefers when job-seeker applies |
| redirect_to  | string | optional | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| job_posting_service | integer | required | The job posting service id that employer purchased on VietnamWorks |
| type_working_id | integer | required | The type working id that type workings on VietnamWorks |
| job_working_location1 | integer | required | The first companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location2 | integer | optional | The second companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location3 | integer | optional | The third companyLocationId of the job working location. At lease one job working location is required. |

The response is a location header that points to the URL of the newly created job. Example response:

```
HTTP/1.1 201 Created
Content-Type: application/json; charset=utf-8
Location: /api/rest/v1/jobs/578189
```

Possible errors:

| Error code           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| 400 Bad Request      | Required fields were invalid, or not specified. Or there is no available job posting service.                                                                          |
| 401 Unauthorized     | The access token is invalid or has been revoked.                                                                     |
| 403 Forbidden        | The user does not have permission to publish. |
| 404 Not Found        | The `jobId` is invalid or not yours job. |

### 3.4. Edits a Job

#### Fully updates an online job post (V3)

**Scope:** `jobpost` only

Fully updates an online job posting information on behalf of the authenticated user.

```
PUT https://api.vietnamworks.com/api/rest/v3/jobs/{jobId}.json 
```

Example request:

```
PUT /api/rest/v3/jobs/{jobId}.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
{
    "job": {
        "job_title": "Fresher Software Test Engineer",
        "job_level": 5,
        "job_locations": [
            29,
            24
        ],
        "minimum_salary": 700,
        "maximum_salary": 1000,
        "is_show_salary": 1,
        "job_description": "Analyze system and software requirements",
        "job_requirements": "Bachelor degree or above in Electrical Engineering or equivalent",
        "skill_tag1": 205,
        "skill_tag2": 207,
        "skill_tag3": 2628,
        "skill_tag4": 6520,
        "skill_tag5": 7103,
        "company_name": "VietnamWorks",
        "company_size": 4,
        "company_address": "10th Floor, Golden Tower, 6 Nguyen Thi Minh Khai, District 1, HCM City.",
        "company_profile": "VietnamWorks is Vietnam's #1 online service for professionals looking for jobs and employers looking for talent.",
        "company_benefit1": {
            "benefit_id": 1,
            "benefit_desc": "12 days annual leave"
        },
        "contact_name": "HR Department",
        "is_show_contact": 1,
        "email_for_application": "lan.bui@navigosgroup.com",
        "preferred_language": 2,
        "type_working_id": 1,
        "job_working_location1": 446,
        "job_working_location2": 379,
        "job_working_location3": 459,
        "is_anonymous": 1,
        "is_show_logo": 0,
        "company_industry": 1,
        "job_function": 2
    }
}
```

With the following fields:

| Parameter       | Type         | Required?  | Description                                     |
| -------------   |--------------|------------|-------------------------------------------------|
| job_title       | string       | required   | The title of the job posting.|
| job_level   | integer       | required   | The job level of the job posting |
| job_locations | integer array | required   | Working cities of the job. At least one city is required and maximum of 3.  |
| minimum_salary | integer | required | Salary range from in USD, which is greater than 1 and less than or equal to than `maximum_salary` |
| maximum_salary | integer | required | Salary range to in USD, which is greater than 1 and greater than or equal to `maximum_salary` |
| is_show_salary | integer | required | Determines whether the salary should be shown on  VietnamWorks website or not. The accepted value is [0,1] |
| job_description | string | required | The description of the job posting. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| job_requirements | string | required | The job posting requirements. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| skill_tag1 | integer | required | First Approved skillId requirement of the job posting position. At least one skill tag is required. |
| skill_tag2 | integer | optional | Second Approved skillId requirement of the job posting position. At least one skill tag is required |
| skill_tag3 | integer | optional | Third Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| skill_tag4 | integer | optional | Fourth Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| skill_tag5 | integer | optional | Fifth Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| company_name | string | required | The employer’s company name on Vietnamworks. |
| company_size | integer | optional | Number of employees in employer company |
| company_address | string | optional | The employer company’s address |
| company_profile | string | required | The employer company information. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| company_benefit1 | benefit | required | The first `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit2 | benefit | optional | The second `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit3 | benefit | optional | The third `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| contact_name | string | required | The HR person who handles the job posting.|
| is_show_contact | checkbox | required | Whether the `contact_name` is shown on job-seeker site or not.  |
| email_for_application | string | required | The email to receive job applications. |
| preferred_language | integer | required | The resume's language that employer prefers when job-seeker applies |
| redirect_to  | string | optional | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| type_working_id | integer | required | The type working idz  that type workings on VietnamWorks |
| job_working_location1 | integer | required | The first companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location2 | integer | optional | The second companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location3 | integer | optional | The third companyLocationId of the job working location. At lease one job working location is required. |
| is_show_logo | integer | required | Show or hide logo of the your company for the job. |
| is_anonymous | integer | required | Show or hide logo and name of your company for the job. |
| company_industry | integer | required | Company Industry of the job posting. Choose maximum 1 industry. |
| job_function | integer | required | Job Function of the job posting. Choose maximum 1 function. |

The response won't be returning a body. Example response:

```
HTTP/1.1 204 No Content
Content-Type: application/json; charset=utf-8
```
    
#### Fully updates an online job post (V2) / (Will be Deprecated)

**Scope:** `jobpost` only

Fully updates an online job posting information on behalf of the authenticated user.

```
PUT https://api.vietnamworks.com/api/rest/v2/jobs/{jobId}.json 
```

Example request:

```
PUT /api/rest/v2/jobs/{jobId}.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
{
    "job": {
        "job_title": "Fresher Software Test Engineer",
        "job_level": 5,
        "job_categories": [
            35,
            70
        ],
        "job_category_orders": "35,70",
        "job_locations": [
            29,
            24
        ],
        "minimum_salary": 700,
        "maximum_salary": 1000,
        "is_show_salary": 1,
        "job_description": "Analyze system and software requirements",
        "job_requirements": "Bachelor degree or above in Electrical Engineering or equivalent",
        "skill_tag1": 205,
        "skill_tag2": 207,
        "skill_tag3": 2628,
        "skill_tag4": 6520,
        "skill_tag5": 7103,
        "company_name": "VietnamWorks",
        "company_size": 4,
        "company_address": "10th Floor, Golden Tower, 6 Nguyen Thi Minh Khai, District 1, HCM City.",
        "company_profile": "VietnamWorks is Vietnam's #1 online service for professionals looking for jobs and employers looking for talent.",
        "company_benefit1": {
            "benefit_id": 1,
            "benefit_desc": "12 days annual leave"
        },
        "contact_name": "HR Department",
        "is_show_contact": 1,
        "email_for_application": "lan.bui@navigosgroup.com",
        "preferred_language": 2,
        "type_working_id": 1,
        "job_working_location1": 446,
        "job_working_location2": 379,
        "job_working_location3": 459,
        "is_anonymous": 1,
        "is_show_logo": 0
    }
}
```

With the following fields:

| Parameter       | Type         | Required?  | Description                                     |
| -------------   |--------------|------------|-------------------------------------------------|
| job_title       | string       | required   | The title of the job posting.|
| job_level   | integer       | required   | The job level of the job posting |
| job_categories | integer array | required   | The industries of the job posting. At least one industry is required and maximum of 3.  |
| job_category_orders  | integer array | required  | The order of `job_categories` list |
| job_locations | integer array | required   | Working cities of the job. At least one city is required and maximum of 3.  |
| minimum_salary | integer | required | Salary range from in USD, which is greater than 1 and less than or equal to than `maximum_salary` |
| maximum_salary | integer | required | Salary range to in USD, which is greater than 1 and greater than or equal to `maximum_salary` |
| is_show_salary | integer | required | Determines whether the salary should be shown on  VietnamWorks website or not. The accepted value is [0,1] |
| job_description | string | required | The description of the job posting. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| job_requirements | string | required | The job posting requirements. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| skill_tag1 | integer | required | First Approved skillId requirement of the job posting position. At least one skill tag is required. |
| skill_tag2 | integer | optional | Second Approved skillId requirement of the job posting position. At least one skill tag is required |
| skill_tag3 | integer | optional | Third Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| skill_tag4 | integer | optional | Fourth Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| skill_tag5 | integer | optional | Fifth Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| company_name | string | required | The employer’s company name on Vietnamworks. |
| company_size | integer | optional | Number of employees in employer company |
| company_address | string | optional | The employer company’s address |
| company_profile | string | required | The employer company information. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| company_benefit1 | benefit | required | The first `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit2 | benefit | optional | The second `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit3 | benefit | optional | The third `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| contact_name | string | required | The HR person who handles the job posting.|
| is_show_contact | checkbox | required | Whether the `contact_name` is shown on job-seeker site or not.  |
| email_for_application | string | required | The email to receive job applications. |
| preferred_language | integer | required | The resume's language that employer prefers when job-seeker applies |
| redirect_to  | string | optional | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| type_working_id | integer | required | The type working idz  that type workings on VietnamWorks |
| job_working_location1 | integer | required | The first companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location2 | integer | optional | The second companyLocationId of the job working location. At lease one job working location is required. |
| job_working_location3 | integer | optional | The third companyLocationId of the job working location. At lease one job working location is required. |
| is_show_logo | integer | required | Show or hide logo of the your company for the job. |
| is_anonymous | integer | required | Show or hide logo and name of your company for the job. |

The response won't be returning a body. Example response:

```
HTTP/1.1 204 No Content
Content-Type: application/json; charset=utf-8
```

#### Partially updates an online job post (V3)

**Scope:** `jobpost` only

Updates one field or more of an online job post on the authenticated user.

```
PATCH https://api.vietnamworks.com/api/rest/v3/jobs/{jobId}.json 
```

Example request:

```
PATCH /api/rest/v3/jobs/{jobId}.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
{
    "job": {
        "job_title": "Fresher Software Test Engineer"
    }
}
```
With the following fields:

| Parameter       | Type         |  Description                                     |
| -------------   |--------------|-------------------------------------------------|
| job_title           | string       |  The title of the job posting.|
| job_level   | integer       | The job level of the job posting |
| job_locations | integer array | Working cities of the job. At least one city is required and maximum of 3.  |
| minimum_salary | integer |  Salary range from in USD, which is greater than 1 and less than or equal to than `maximum_salary` |
| maximum_salary | integer |  Salary range to in USD, which is greater than 1 and greater than or equal to `maximum_salary` |
| is_show_salary | integer | Determines whether the salary should be shown on  VietnamWorks website or not. The accepted value is [0,1] |
| job_description | string |  The description of the job posting. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| job_requirements | string |  The job posting requirements. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| skill_tag1 | integer |  First Approved skillId requirement of the job posting position. At least one skill tag is required. |
| skill_tag2 | integer | Second Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| skill_tag3 | integer |  Third Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| skill_tag4 | integer |  Fourth Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| skill_tag5 | integer |  Fifth Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| company_name | string |  The employer’s company name on Vietnamworks. |
| company_size | integer | Number of employees in employer company |
| company_address | string |  The employer company’s address |
| company_profile | string |  The employer company information. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| company_benefit1 | benefit |  The first `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit2 | benefit |  The second `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit3 | benefit |  The third `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| contact_name | string | The HR person who handles the job posting.|
| is_show_contact | checkbox | Whether the `contact_name` is shown on job-seeker site or not.  |
| email_for_application | string | The email to receive job applications. |
| preferred_language | integer | The resume's language that employer prefers when job-seeker applies |
| redirect_to  | string  | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|
| company_industry | integer | required | Company Industry of the job posting. Choose maximum 1 industry. |
| job_function | integer | required | Job Function of the job posting. Choose maximum 1 function. |

The response won't be returning a body. Example response:

```
HTTP/1.1 204 No Content
Content-Type: application/json; charset=utf-8
```

Possible errors:

| Error code           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| 400 Bad Request      | Required fields were invalid, or not specified.                                                                         |
| 401 Unauthorized     | The access token is invalid, or has been revoked.                                                                     |
| 403 Forbidden        | The user does not have permission to publish. |
| 404 Not Found        | The `jobId` is invalid or not yours job. |

#### Partially updates an online job post (V2) / (Will be Deprecated)

**Scope:** `jobpost` only

Updates one field or more of an online job post on the authenticated user.

```
PATCH https://api.vietnamworks.com/api/rest/v2/jobs/{jobId}.json 
```

Example request:

```
PATCH /api/rest/v2/jobs/{jobId}.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
{
    "job": {
        "job_title": "Fresher Software Test Engineer"
    }
}
```
With the following fields:

| Parameter       | Type         |  Description                                     |
| -------------   |--------------|-------------------------------------------------|
| job_title           | string       |  The title of the job posting.|
| job_level   | integer       | The job level of the job posting |
| job_categories | integer array |  The industries of the job posting. At least one industry is required and maximum of 3.  |
| job_category_orders  | integer array |  The order of `job_categories` list |
| job_locations | integer array | Working cities of the job. At least one city is required and maximum of 3.  |
| minimum_salary | integer |  Salary range from in USD, which is greater than 1 and less than or equal to than `maximum_salary` |
| maximum_salary | integer |  Salary range to in USD, which is greater than 1 and greater than or equal to `maximum_salary` |
| is_show_salary | integer | Determines whether the salary should be shown on  VietnamWorks website or not. The accepted value is [0,1] |
| job_description | string |  The description of the job posting. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| job_requirements | string |  The job posting requirements. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| skill_tag1 | integer |  First Approved skillId requirement of the job posting position. At least one skill tag is required. |
| skill_tag2 | integer | Second Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| skill_tag3 | integer |  Third Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| skill_tag4 | integer |  Fourth Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| skill_tag5 | integer |  Fifth Approved skillId requirement of the job posting position.  At least one skill tag is required. |
| company_name | string |  The employer’s company name on Vietnamworks. |
| company_size | integer | Number of employees in employer company |
| company_address | string |  The employer company’s address |
| company_profile | string |  The employer company information. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| company_benefit1 | benefit |  The first `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit2 | benefit |  The second `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit3 | benefit |  The third `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| contact_name | string | The HR person who handles the job posting.|
| is_show_contact | checkbox | Whether the `contact_name` is shown on job-seeker site or not.  |
| email_for_application | string | The email to receive job applications. |
| preferred_language | integer | The resume's language that employer prefers when job-seeker applies |
| redirect_to  | string  | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|

The response won't be returning a body. Example response:

```
HTTP/1.1 204 No Content
Content-Type: application/json; charset=utf-8
```

Possible errors:

| Error code           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| 400 Bad Request      | Required fields were invalid, or not specified.                                                                         |
| 401 Unauthorized     | The access token is invalid, or has been revoked.                                                                     |
| 403 Forbidden        | The user does not have permission to publish. |
| 404 Not Found        | The `jobId` is invalid or not yours job. |

#### Fully updates an online job post V1 / (Will be Deprecated)

**Scope:** `jobpost` only

Fully updates an online job posting information on behalf of the authenticated user.

```
PUT https://api.vietnamworks.com/api/rest/v1/jobs/{jobId}.json 
```

Example request:

```
PUT /api/rest/v1/jobs/{jobId}.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
{
    "job": {
        "job_title": "Fresher Software Test Engineer",
        "job_level": 5,
        "job_categories": [
            35,
            70
        ],
        "job_category_orders": "35,70",
        "job_locations": [
            29,
            24
        ],
        "minimum_salary": 700,
        "maximum_salary": 1000,
        "is_show_salary": 1,
        "job_description": "Analyze system and software requirements",
        "job_requirements": "Bachelor degree or above in Electrical Engineering or equivalent",
        "skill_tag1": "English Advanced",
        "skill_tag2": "Embedded - C/C++ ",
        "skill_tag3": "QA/QC",
        "company_name": "VietnamWorks",
        "company_size": 4,
        "company_address": "10th Floor, Golden Tower, 6 Nguyen Thi Minh Khai, District 1, HCM City.",
        "company_profile": "VietnamWorks is Vietnam's #1 online service for professionals looking for jobs and employers looking for talent.",
        "company_benefit1": {
            "benefit_id": 1,
            "benefit_desc": "12 days annual leave"
        },
        "contact_name": "HR Department",
        "is_show_contact": 1,
        "email_for_application": "lan.bui@navigosgroup.com",
        "preferred_language": 2
    }
}
```

With the following fields:

| Parameter       | Type         | Required?  | Description                                     |
| -------------   |--------------|------------|-------------------------------------------------|
| job_title           | string       | required   | The title of the job posting.|
| job_level   | integer       | required   | The job level of the job posting |
| job_categories | integer array | required   | The industries of the job posting. At least one industry is required and maximum of 3.  |
| job_category_orders  | integer array | required  | The order of `job_categories` list |
| job_locations | integer array | required   | Working cities of the job. At least one city is required and maximum of 3.  |
| minimum_salary | integer | required | Salary range from in USD, which is greater than 1 and less than or equal to than `maximum_salary` |
| maximum_salary | integer | required | Salary range to in USD, which is greater than 1 and greater than or equal to `maximum_salary` |
| is_show_salary | integer | required | Determines whether the salary should be shown on  VietnamWorks website or not. The accepted value is [0,1] |
| job_description | string | required | The description of the job posting. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| job_requirements | string | required | The job posting requirements. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| skill_tag1 | string | optional | First skill requirement of the job posting position. At least one skill tag is required. |
| skill_tag2 | string | optional | Second skill requirement of the job posting position.  At least one skill tag is required. |
| skill_tag3 | string | optional | Third skill requirement of the job posting position.  At least one skill tag is required. |
| company_name | string | required | The employer’s company name on Vietnamworks. |
| company_size | integer | optional | Number of employees in employer company |
| company_address | string | optional | The employer company’s address |
| company_profile | string | required | The employer company information. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| company_benefit1 | benefit | required | The first `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit2 | benefit | optional | The second `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit3 | benefit | optional | The third `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| contact_name | string | required | The HR person who handles the job posting.|
| is_show_contact | checkbox | required | Whether the `contact_name` is shown on job-seeker site or not.  |
| email_for_application | string | required | The email to receive job applications. |
| preferred_language | integer | required | The resume's language that employer prefers when job-seeker applies |
| redirect_to  | string | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|


The response won't be returning a body. Example response:

```
HTTP/1.1 204 No Content
Content-Type: application/json; charset=utf-8
```


#### Partially updates an online job post V1 / ( Will be Deprecated )

**Scope:** `jobpost` only

Updates one field or more of an online job post on the authenticated user.

```
PATCH https://api.vietnamworks.com/api/rest/v1/jobs/{jobId}.json 
```

Example request:

```
PATCH /api/rest/v1/jobs/{jobId}.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer MTFmMTY2MTI2ZGQ1NGRmZDljZGFiZGQ2YzVjNGIyMGI5NTY0NDQ0MDI3M2EyMjIyNWM5ZmZiM2FmMjRhNDljMA
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
{
    "job": {
        "job_title": "Fresher Software Test Engineer"
    }
}
```

With the following fields:

| Parameter       | Type         |  Description                                     |
| -------------   |--------------|-------------------------------------------------|
| job_title           | string       |  The title of the job posting.|
| job_level   | integer       | The job level of the job posting |
| job_categories | integer array |  The industries of the job posting. At least one industry is required and maximum of 3.  |
| job_category_orders  | integer array |  The order of `job_categories` list |
| job_locations | integer array | Working cities of the job. At least one city is required and maximum of 3.  |
| minimum_salary | integer |  Salary range from in USD, which is greater than 1 and less than or equal to than `maximum_salary` |
| maximum_salary | integer |  Salary range to in USD, which is greater than 1 and greater than or equal to `maximum_salary` |
| is_show_salary | integer | Determines whether the salary should be shown on  VietnamWorks website or not. The accepted value is [0,1] |
| job_description | string |  The description of the job posting. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| job_requirements | string |  The job posting requirements. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| skill_tag1 | string |  First skill requirement of the job posting position. At least one skill tag is required. |
| skill_tag2 | string | Second skill requirement of the job posting position.  At least one skill tag is required. |
| skill_tag3 | string |  Third skill requirement of the job posting position.  At least one skill tag is required. |
| company_name | string |  The employer’s company name on Vietnamworks. |
| company_size | integer | Number of employees in employer company |
| company_address | string |  The employer company’s address |
| company_profile | string |  The employer company information. Plain text only (HTML tags will be shown as normal < and >). To insert a newline please use \n|
| company_benefit1 | benefit |  The first `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit2 | benefit |  The second `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| company_benefit3 | benefit |  The third `benefit` object (benefit_id and benefit_description). At lease one benefit is required. |
| contact_name | string | The HR person who handles the job posting.|
| is_show_contact | checkbox | Whether the `contact_name` is shown on job-seeker site or not.  |
| email_for_application | string | The email to receive job applications. |
| preferred_language | integer | The resume's language that employer prefers when job-seeker applies |
| redirect_to  | string  | The redirect URL that candidates to be redirected to the relevant application page on their career site to Apply|

The response won't be returning a body. Example response:

```
HTTP/1.1 204 No Content
Content-Type: application/json; charset=utf-8
```

Possible errors:

| Error code           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| 400 Bad Request      | Required fields were invalid, or not specified.                                                                         |
| 401 Unauthorized     | The access token is invalid, or has been revoked.                                                                     |
| 403 Forbidden        | The user does not have permission to publish. |
| 404 Not Found        | The `jobId` is invalid or not yours job. |

### 3.5. Activates/Deactivates a Job

#### Actives a job
Actives an online job posting information on behalf of the authenticated user.

A request looks like this:

```
PATCH https://api.vietnamworks.com/api/rest/v1/jobs/{jobId}/activate.json
```

The response won't be returning a body. Example response:

```
HTTP/1.1 204 No Content
Content-Type: application/json; charset=utf-8
```

#### Deactives job posting
Deactives an online job posting information on behalf of the authenticated user.

A request looks like this:

```
PATCH https://api.vietnamworks.com/api/rest/v1/jobs/{jobId}/deactivate.json
```

The response won't be returning a body. Example response:

```
HTTP/1.1 204 No Content
Content-Type: application/json; charset=utf-8
```

Possible errors:

| Error code           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| 400 Bad Request      | Required fields were invalid, not specified.                                                                         |
| 401 Unauthorized     | The access token is invalid or has been revoked.                                                                     |
| 403 Forbidden        | The user does not have permission to publish. |
| 404 Not Found        | The `jobId` is invalid or not yours job. |

### 3.6. Listing Approved Skill Tags

***Get List Approved Skills Tags***
Approved Skills is required to post/edit job posting

A request looks like this:

```
GET https://api.vietnamworks.com/skill-tags/skill/suggestion?query={keyword}
```

##### Request
| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| keyword  | Keyword of query skill                                                                        |


Example request:

```
GET /skill-tags/skill/suggestion?query=php HTTP/1.1
Host: api.vietnamworks.com
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
```

The response will be list of **Approved** skillId
 Example response:

```json
{
    "data": [{
        "id": 205,
        "name": "PHP"
    }, {
        "id": 207,
        "name": "PHP Frameworks"
    }, {
        "id": 2628,
        "name": "L\u1eadp Tr\u00ecnh PHP"
    }, {
        "id": 6520,
        "name": "Fuelphp"
    }, {
        "id": 7103,
        "name": "PHP Zend Framework"
    }],
    "status": {
        "code": 200,
        "message": ""
    }
}
```

Response:

| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| id  | Approved Skill ID                                                                        |
| name    | Name of approved skill                                                                    |

#### Special Cases

**Not Found**

Example request:

```
GET /skill-tags/skill/suggestion?query=php5123 HTTP/1.1
Host: api.vietnamworks.com
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
```

```json
{
    "data": [],
    "status": {
        "code": 200,
        "message": "Not found any skill tags."
    }
}
```

**Missing Query Parameter**

Example request:

```
GET /skill-tags/skill/suggestion HTTP/1.1
Host: api.vietnamworks.com
Content-Type: application/json
Accept: application/json
Accept-Charset: utf-8
```

```json
{
    "error": true,
    "message": "Missing query parameter"
}
```
### 3.7. Company Location
**CRUD Company Location**

#### 3.7.1. List of company locations
***Get List Of Company Locations***

A request looks like this:

```
GET https://api.vietnamworks.com/api/rest/v1/company/locations
```

Example request:

```
GET api/rest/v1/company/locations.json HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer M2I0N2U2MDE0MTc4MmU0Yjc1Mzk2MDU2NWJhMzgxYmUzMjBjYWNhZmI0MTFkODc4MWM2YWUxMTZiMTI5OGMyYQ
```

The response will be list of **Company Loations**
 Example response:

```json
{
    "data": [
        {
            "id": 378,
            "office_name": "Navigos",
            "address": "11 Đoàn Văn Bơ, Phường 12, Quận 4, Hồ Chí Minh",
            "city_id": 29
        },
        {
            "id": 379,
            "office_name": "Navigos 2",
            "address": "11 Đoàn Văn Bơ, Phường 12, Quận 4, Hồ Chí Minh",
            "city_id": 29
        }
    ],
    "status": {
        "code": 200,
        "message": "Success"
    }
}
```

Response:

| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| id            | Company Location ID                                                                      |
| office_name   | Office Name Of Company Location                                                          |
| address       | Address Of Company Location                                                              |
| city_id       | City ID of Company Location                                                              |

#### Special Cases

**Not Found**


```json
{
    "data": [],
    "status": {
        "code": 404,
        "message": "Not found any company locations."
    }
}
```
#### 3.7.2. Create a company location
***Create a company location***

```
POST https://api.vietnamworks.com/api/rest/v1/company/locations
```

Example request:

```
POST /api/rest/v1/company/locations HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer M2I0N2U2MDE0MTc4MmU0Yjc1Mzk2MDU2NWJhMzgxYmUzMjBjYWNhZmI0MTFkODc4MWM2YWUxMTZiMTI5OGMyYQ
Content-Type: application/json

{
    "company_location": {
        "office_name":"Navigos",
        "city_id": 29,
        "address": "11 Đoàn Văn Bơ, Phường 12, Quận 4, Hồ Chí Minh"
    }
}
```

With the following fields:

| Parameter       | Type         | Required?  | Description                                     |
| -------------   |--------------|------------|-------------------------------------------------|
| office_name     | string       | required   | The office name of the company.|
| city_id         | integer      | required   | The company location of the company. |
| address         | string       | required   | The address of the company location.  |

The response of the newly created company location. Example response:

```
HTTP/1.1 201 Created
Content-Type: application/json; charset=utf-8
{
    "data": {
        "location_id": 410
    },
    "status": {
        "code": 200,
        "message": "Success"
    }
}
```

Possible errors:

| Error code           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| 400 Bad Request      | Required fields were invalid, or not specified. Or there is no available company location service.                                                                          |
| 401 Unauthorized     | The access token is invalid or has been revoked.                                                                     |
| 403 Forbidden        | The user does not have permission to publish. |
| 404 Not Found        |The locationId is invalid or not yours company.
#### Special Cases

**Company Location already exist**

Example response:

```
HTTP/1.1 400 Bad Request
Content-Type: application/json; charset=utf-8
{
   "status": {
        "code": 400,
        "message": "Location already exists, please choose another!"
    }
}
```

**Limit for the amount of company locations you can create**

Example response:

```
HTTP/1.1 403 Forbidden
Content-Type: application/json; charset=utf-8
{
   "status": {
        "code": 403,
        "message": "You’ve exceeded the limit for the amount of company locations you can create!"
    }
}
```
#### 3.7.3. Update a company location
***Update a company location***

```
PUT https://api.vietnamworks.com/api/rest/v1/company/locations/{locationId}
```

Example request:

```
PUT /api/rest/v1/company/locations/{locationId} HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer M2I0N2U2MDE0MTc4MmU0Yjc1Mzk2MDU2NWJhMzgxYmUzMjBjYWNhZmI0MTFkODc4MWM2YWUxMTZiMTI5OGMyYQ
Content-Type: application/json

{
    "company_location": {
        "office_name":"New Navigos",
        "city_id": 29,
        "address": "New 11 Đoàn Văn Bơ, Phường 12, Quận 4, Hồ Chí Minh"
     }
}
```

The response won't be returning a body. Example response:

```
HTTP/1.1 204 No Content
Content-Type: application/json; charset=utf-8
```

#### Special Cases

**Company Location Not Found**

Example response:

```
HTTP/1.1 404 Bad Request
Content-Type: application/json; charset=utf-8
{
    "status": {
        "code": 404,
        "message": "Not found your company locations"
    }
}
```

#### 3.7.4. Delete a company location
***Delete a company location***

```
DELETE https://api.vietnamworks.com/api/rest/v1/company/locations/{locationId}
```

Example request:

```
PUT /api/rest/v1/company/locations/{locationId} HTTP/1.1
Host: api.vietnamworks.com
Authorization: Bearer M2I0N2U2MDE0MTc4MmU0Yjc1Mzk2MDU2NWJhMzgxYmUzMjBjYWNhZmI0MTFkODc4MWM2YWUxMTZiMTI5OGMyYQ
```

The response won't be returning a body. Example response:

```
HTTP/1.1 204 No Content
Content-Type: application/json; charset=utf-8
```

#### Special Cases

**Company Location Not Found**

Example response:

```
HTTP/1.1 404 Bad Request
Content-Type: application/json; charset=utf-8
{
    "status": {
        "code": 404,
        "message": "Not found your company locations"
    }
}
```

**The company location being used by your job posts**

Example response:

```
HTTP/1.1 400 Bad Request
Content-Type: application/json; charset=utf-8
{
   "status": {
        "code": 400,
        "message": "You cannot delete this location because it is being used by your job posts"
    }
}
```

### 3.8. Meta Categories
**Provide a list of reference meta such as Job Levels, Job Categories, Job Locations, etc.**

#### 3.8.1. List of Job Levels
***Get list of job levels***

A request looks like this:

```
GET https://ms.vietnamworks.com/meta/v1.1/job-levels
```

Example request:

```
GET meta/v1.1/job-levels HTTP/1.1
Host: ms.vietnamworks.com
```

The response will be list of **Job Levels**
 Example response:

```json
{
	"data": [
		{
			"type": "jobLevel",
			"id": 8,
			"attributes": {
				"nameVi": "Thực tập sinh/Sinh viên",
				"nameEn": "Intern/Student"
			}
		},
		{
			"type": "jobLevel",
			"id": 1,
			"attributes": {
				"nameVi": "Mới Tốt Nghiệp",
				"nameEn": "Fresher/Entry level"
			}
		}
	],
	"meta": {
		"statusCode": 200
	},
	"links": {
		"self": "/meta/v1.1/job-levels"
	}
}
```

Response:

| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| id            | Job Level Id                                                                      |
| nameVi   | Vietnamese Job Level Name                                                          |
| nameEn       | English Job Level Name                                                              |

#### 3.8.2. List of Job Categories
***Get list of job Categories***

A request looks like this:

```
GET https://ms.vietnamworks.com/meta/v1.1/industries
```

Example request:

```
GET meta/v1.1/industries HTTP/1.1
Host: ms.vietnamworks.com
```

The response will be list of **Job Categories**
 Example response:

```json
{
	"data": [
		{
			"type": "industry",
			"id": 83,
			"attributes": {
				"nameVi": "An toàn lao động",
				"nameEn": "HSE"
			}
		},
		{
			"type": "industry",
			"id": 78,
			"attributes": {
				"nameVi": "Bác sĩ",
				"nameEn": "Doctors"
			}
		}
	],
	"meta": {
		"statusCode": 200
	},
	"links": {
		"self": "/meta/v1.1/industries"
	}
}
```

Response:

| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| id            | Job Category Id                                                                      |
| nameVi   | Vietnamese Job Category Name                                                          |
| nameEn       | English Job Category Name                                                              |

#### 3.8.3. List of Job Locations
***Get list of job Locations***

A request looks like this:

```
GET https://ms.vietnamworks.com/meta/v1.1/cities
```

Example request:

```
GET meta/v1.1/cities HTTP/1.1
Host: ms.vietnamworks.com
```

The response will be list of **Job Locations**
 Example response:

```json
{
	"data": [
		{
			"type": "city",
			"id": 29,
			"attributes": {
				"nameVi": "Hồ Chí Minh",
				"nameEn": "Ho Chi Minh"
			}
		},
		{
			"type": "city",
			"id": 24,
			"attributes": {
				"nameVi": "Hà Nội",
				"nameEn": "Ha Noi"
			}
		}
	],
	"meta": {
		"statusCode": 200
	},
	"links": {
		"self": "/meta/v1.1/cites"
	}
}
```

Response:

| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| id            | Job Location Id                                                                      |
| nameVi   | Vietnamese Job Location Name                                                          |
| nameEn       | English Job Location Name                                                              |

#### 3.8.4. List of Job Working Types
***Get list of job Working Types***

A request looks like this:

```
GET https://ms.vietnamworks.com/meta/v1.1/type-workings
```

Example request:

```
GET meta/v1.1/type-workings HTTP/1.1
Host: ms.vietnamworks.com
```

The response will be list of **Job Working Types**
 Example response:

```json
{
	"data": [
		{
			"type": "jobLevel",
			"id": 1,
			"attributes": {
				"nameVi": "Toàn thời gian",
				"nameEn": "Full-time"
			}
		},
		{
			"type": "jobLevel",
			"id": 2,
			"attributes": {
				"nameVi": "Bán thời gian",
				"nameEn": "Part-time"
			}
		}
	],
	"meta": {
		"statusCode": 200
	},
	"links": {
		"self": "/meta/v1.1/type-workings"
	}
}
```

Response:

| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| id            | Job Working Type Id                                                                      |
| nameVi   | Vietnamese Job Working Type Name                                                          |
| nameEn       | English Job Working Type Name                                                              |

#### 3.8.5. List of Company Benefits
***Get list of Company Benefits***

A request looks like this:

```
GET https://ms.vietnamworks.com/meta/v1.1/benefits
```

Example request:

```
GET meta/v1.1/benefits HTTP/1.1
Host: ms.vietnamworks.com
```

The response will be list of **Company Benefits**
 Example response:

```json
{
	"data": [
		{
			"type": "benefit",
			"id": 1,
			"attributes": {
				"nameVi": "Thưởng",
				"nameEn": "Bonus",
				"iconName": "fa-dollar"
			}
		},
		{
			"type": "benefit",
			"id": 2,
			"attributes": {
				"nameVi": "Khám sức khoẻ",
				"nameEn": "Healthcare Plan",
				"iconName": "fa-user-md"
			}
		}
	],
	"meta": {
		"statusCode": 200
	},
	"links": {
		"self": "/meta/v1.1/benefits"
	}
}
```

Response:

| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| id            | Company Benefit Id                                                                      |
| nameVi   | Vietnamese Company Benefit Name                                                          |
| nameEn       | English Company Benefit Name                                                              |
| iconName       | Company Benefit Icon                                                              |

#### 3.8.6. List of Job Salary Ranges
***Get list of Job Salary Ranges***

A request looks like this:

```
GET https://ms.vietnamworks.com/meta/v1.1/salary-ranges
```

Example request:

```
GET meta/v1.1/salary-ranges HTTP/1.1
Host: ms.vietnamworks.com
```

The response will be list of **Job Salary Ranges**
 Example response:

```json
{
	"data": [
		{
			"type": "jobLevel",
			"id": 1,
			"attributes": {
				"minSalary": 0,
				"maxSalary": 500
			}
		},
		{
			"type": "jobLevel",
			"id": 2,
			"attributes": {
				"minSalary": 500,
				"maxSalary": 1000
			}
		}
	],
	"meta": {
		"statusCode": 200
	},
	"links": {
		"self": "/meta/v1.1//salary-ranges"
	}
}
```

Response:

| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| id            | Job Salary Range Id                                                                      |
| minSalary   | Minimum Job Salary (dollar unit)                                                          |
| maxSalary       | Maximum Job Salary (dollar unit)                                                             |

#### 3.8.7. List of Company Industries
***Get list of Company Industries***

A request looks like this:

```
GET https://ms.vietnamworks.com/meta/v1.1/company-industries
```

Example request:

```
GET meta/v1.1/company-industries HTTP/1.1
Host: ms.vietnamworks.com
```

The response will be list of **Company Industry**
 Example response:

```json
{
	"data": {
		"type": "companyIndustries",
		"id": "companyIndustries",
		"relationships": {
			"links": {
				"self": "/meta/v1.0/company-industry"
			},
			"data": [
				{
					"id": 1,
					"type": "companyIndustryItem",
					"attributes": {
						"nameVi": "Dịch vụ lưu trú/Nhà hàng/Khách sạn/Du lịch",
						"nameEn": "Accommodation/Restaurant/Hotel/Tourism"
					}
				},
				{
					"id": 2,
					"type": "companyIndustryItem",
					"attributes": {
						"nameVi": "Kế toán/Kiểm toán",
						"nameEn": "Accounting/Auditing"
					}
				},
				{
					"id": 3,
					"type": "companyIndustryItem",
					"attributes": {
						"nameVi": "Nông nghiệp/Lâm nghiệp/Nuôi trồng thủy sản",
						"nameEn": "Agriculture/Forestry/Aquaculture"
					}
				}
			]
		}
	},
	"meta": {
		"statusCode": 200
	}
}
```

Response:

| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| id            | Company Industry Id                                                                      |
| nameVi   | Vietnamese Company Industry Name                                                          |
| nameEn       | Vietnamese Company Industry Name                                                             |

#### 3.8.8. List of Job Functions
***Get list of Job Functions***

A request looks like this:

```
GET https://ms.vietnamworks.com/meta/v1.1/job-function
```

Example request:

```
GET meta/v1.1/job-function HTTP/1.1
Host: ms.vietnamworks.com
```

The response will be list of **Job Function**
 Example response:

```json
{
	"data": [
		{
			"id": 1,
			"type": "groupJobFunction",
			"attributes": {
				"nameVi": "Giáo Dục",
				"nameEn": "Academic/Education"
			},
			"relationships": {
				"jobFunction": {
					"data": [
						{
							"type": "jobFunction",
							"id": 1
						},
						{
							"type": "jobFunction",
							"id": 2
						},
						{
							"type": "jobFunction",
							"id": 3
						}
					]
				}
			}
		},
		{
			"id": 2,
			"type": "groupJobFunction",
			"attributes": {
				"nameVi": "Kế Toán/Kiểm Toán",
				"nameEn": "Accounting/Auditing"
			},
			"relationships": {
				"jobFunction": {
					"data": [
						{
							"type": "jobFunction",
							"id": 6
						},
						{
							"type": "jobFunction",
							"id": 7
						},
						{
							"type": "jobFunction",
							"id": 8
						},
						{
							"type": "jobFunction",
							"id": 9
						}
					]
				}
			}
		},
		{
			"id": 3,
			"type": "groupJobFunction",
			"attributes": {
				"nameVi": "Nông/Lâm/Ngư Nghiệp",
				"nameEn": "Agriculture/Livestock/Fishery"
			},
			"relationships": {
				"jobFunction": {
					"data": [
						{
							"type": "jobFunction",
							"id": 17
						}
					]
				}
			}
		}
	],
	"included": [
		{
			"id": 1,
			"type": "jobFunction",
			"attributes": {
				"nameVi": "Tư Vấn Giáo Dục",
				"nameEn": "Educational Consulting"
			},
			"relationships": {
				"jobFunction": {
					"data": null
				}
			}
		},
		{
			"id": 2,
			"type": "jobFunction",
			"attributes": {
				"nameVi": "Quản Lý Giáo Dục",
				"nameEn": "Educational Management"
			},
			"relationships": {
				"jobFunction": {
					"data": null
				}
			}
		},
		{
			"id": 3,
			"type": "jobFunction",
			"attributes": {
				"nameVi": "Nghiên Cứu Học Thuật",
				"nameEn": "Research and Fellowship"
			},
			"relationships": {
				"jobFunction": {
					"data": null
				}
			}
		}
	],
	"meta": {
		"statusCode": 200
	}
}
```

Response:

| Key           | Description                                                                                                          |
| ---------------------|----------------------------------------------------------------------------------------------------------------------|
| id (type=groupJobFunction)            | Group Job Function ID (include list of Job Function Ids)                                                                     |
| nameVi   | Vietnamese Group Job Function Name                                                          |
| nameEn       | Vietnamese Group Job Function Name                                                             |
| relationships       | Keep a list of job function ids                                                             |
| id (type=jobFunction)            | Job Function ID (must belong to Group Job Function ID)                                                                     |
| nameVi   | Vietnamese Job Function Name                                                          |
| nameEn       | Vietnamese Job Function Name                                                             |


## 4. Testing

We have a sandbox environment for testing. All requests are made to endpoints beginning:

`https://release-api.vietnamworks.com/`

Please feel free to contact us for a testing account.
