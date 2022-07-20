<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Recruitment API</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost:8008";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.34.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.34.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-candidates">
                        <a href="#endpoints-GETapi-v1-candidates">GET api/v1/candidates</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-candidates">
                        <a href="#endpoints-POSTapi-v1-candidates">POST api/v1/candidates</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-candidates--id-">
                        <a href="#endpoints-GETapi-v1-candidates--id-">GET api/v1/candidates/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-candidates--id-">
                        <a href="#endpoints-PUTapi-v1-candidates--id-">PUT api/v1/candidates/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-candidates--id-">
                        <a href="#endpoints-DELETEapi-v1-candidates--id-">DELETE api/v1/candidates/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-skills">
                        <a href="#endpoints-GETapi-v1-skills">GET api/v1/skills</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-skills">
                        <a href="#endpoints-POSTapi-v1-skills">POST api/v1/skills</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-skills--id-">
                        <a href="#endpoints-GETapi-v1-skills--id-">GET api/v1/skills/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-skills--id-">
                        <a href="#endpoints-PUTapi-v1-skills--id-">PUT api/v1/skills/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-skills--id-">
                        <a href="#endpoints-DELETEapi-v1-skills--id-">DELETE api/v1/skills/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-candidates--candidate_id--changeStatus">
                        <a href="#endpoints-PATCHapi-v1-candidates--candidate_id--changeStatus">PATCH api/v1/candidates/{candidate_id}/changeStatus</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-candidates--candidate_id--skills">
                        <a href="#endpoints-GETapi-v1-candidates--candidate_id--skills">GET api/v1/candidates/{candidate_id}/skills</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-candidates--candidate_id--skills">
                        <a href="#endpoints-POSTapi-v1-candidates--candidate_id--skills">POST api/v1/candidates/{candidate_id}/skills</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-candidates--candidate_id--timeline">
                        <a href="#endpoints-GETapi-v1-candidates--candidate_id--timeline">GET api/v1/candidates/{candidate_id}/timeline</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: July 20 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:8008/</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-v1-candidates">GET api/v1/candidates</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-candidates">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8008/api/v1/candidates" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/candidates"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-candidates">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 30
x-ratelimit-remaining: 29
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;first_name&quot;: &quot;Vance&quot;,
            &quot;last_name&quot;: &quot;Franecki&quot;,
            &quot;email&quot;: &quot;xcrona@example.com&quot;,
            &quot;phone&quot;: &quot;1-901-786-9070&quot;,
            &quot;position&quot;: &quot;Laundry OR Dry-Cleaning Worker&quot;,
            &quot;years_of_experience&quot;: 10,
            &quot;salary_from&quot;: 2435,
            &quot;salary_to&quot;: 2189,
            &quot;linkedin_url&quot;: &quot;https://www.block.com/enim-consequatur-iure-saepe-qui-vel-doloremque-similique&quot;,
            &quot;status&quot;: &quot;hired&quot;,
            &quot;skills&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;SQL&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 5,
                    &quot;title&quot;: &quot;CSS&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 6,
                    &quot;title&quot;: &quot;Python&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;C#&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Swift&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 11,
                    &quot;title&quot;: &quot;TypeScript&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;title&quot;: &quot;Go&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                }
            ],
            &quot;cv_url&quot;: &quot;http://kerluke.org/et-vero-et-et-sint-reprehenderit&quot;,
            &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;first_name&quot;: &quot;Vincenzo&quot;,
            &quot;last_name&quot;: &quot;Corwin&quot;,
            &quot;email&quot;: &quot;bschultz@example.org&quot;,
            &quot;phone&quot;: &quot;917.257.6454&quot;,
            &quot;position&quot;: &quot;Lifeguard&quot;,
            &quot;years_of_experience&quot;: 3,
            &quot;salary_from&quot;: 1871,
            &quot;salary_to&quot;: 4222,
            &quot;linkedin_url&quot;: &quot;http://hessel.biz/&quot;,
            &quot;status&quot;: &quot;hired&quot;,
            &quot;skills&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;PHP&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;SQL&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;JavaScript&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;C#&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Ruby&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;title&quot;: &quot;Go&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                }
            ],
            &quot;cv_url&quot;: &quot;http://borer.com/&quot;,
            &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;first_name&quot;: &quot;Travis&quot;,
            &quot;last_name&quot;: &quot;Littel&quot;,
            &quot;email&quot;: &quot;titus58@example.net&quot;,
            &quot;phone&quot;: &quot;(352) 961-2956&quot;,
            &quot;position&quot;: &quot;Freight Agent&quot;,
            &quot;years_of_experience&quot;: 4,
            &quot;salary_from&quot;: 3827,
            &quot;salary_to&quot;: 5777,
            &quot;linkedin_url&quot;: &quot;http://www.weissnat.com/eaque-nulla-quibusdam-necessitatibus-et-voluptate-qui&quot;,
            &quot;status&quot;: &quot;rejected&quot;,
            &quot;skills&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;PHP&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 4,
                    &quot;title&quot;: &quot;HTML&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 6,
                    &quot;title&quot;: &quot;Python&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;C#&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Ruby&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 10,
                    &quot;title&quot;: &quot;Kotlin&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;title&quot;: &quot;Go&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                }
            ],
            &quot;cv_url&quot;: &quot;https://www.cronin.net/molestiae-pariatur-non-quaerat-vel-et-dolor-in&quot;,
            &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;first_name&quot;: &quot;Emerson&quot;,
            &quot;last_name&quot;: &quot;Zieme&quot;,
            &quot;email&quot;: &quot;egerlach@example.com&quot;,
            &quot;phone&quot;: &quot;848.615.4332&quot;,
            &quot;position&quot;: &quot;Farm and Home Management Advisor&quot;,
            &quot;years_of_experience&quot;: 9,
            &quot;salary_from&quot;: 1250,
            &quot;salary_to&quot;: 5870,
            &quot;linkedin_url&quot;: &quot;http://www.metz.com/vitae-ratione-eum-cupiditate-qui&quot;,
            &quot;status&quot;: &quot;initial&quot;,
            &quot;skills&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;PHP&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;SQL&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;JavaScript&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 5,
                    &quot;title&quot;: &quot;CSS&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;C#&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Swift&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Ruby&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;title&quot;: &quot;Go&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                }
            ],
            &quot;cv_url&quot;: &quot;http://rempel.com/&quot;,
            &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;first_name&quot;: &quot;Dean&quot;,
            &quot;last_name&quot;: &quot;Bergstrom&quot;,
            &quot;email&quot;: &quot;leuschke.oran@example.net&quot;,
            &quot;phone&quot;: &quot;+1-618-975-2627&quot;,
            &quot;position&quot;: &quot;Electrical and Electronic Inspector and Tester&quot;,
            &quot;years_of_experience&quot;: 7,
            &quot;salary_from&quot;: 2023,
            &quot;salary_to&quot;: 2976,
            &quot;linkedin_url&quot;: &quot;http://bailey.net/cumque-enim-voluptatem-quia-nemo-expedita-nulla-enim-eum&quot;,
            &quot;status&quot;: &quot;first_contact&quot;,
            &quot;skills&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;SQL&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;JavaScript&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 4,
                    &quot;title&quot;: &quot;HTML&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Swift&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Ruby&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;title&quot;: &quot;Go&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                }
            ],
            &quot;cv_url&quot;: &quot;http://wiza.org/error-sit-distinctio-qui-quaerat-deserunt-sint&quot;,
            &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;first_name&quot;: &quot;Edyth&quot;,
            &quot;last_name&quot;: &quot;Fay&quot;,
            &quot;email&quot;: &quot;jonatan57@example.com&quot;,
            &quot;phone&quot;: &quot;651-319-7510&quot;,
            &quot;position&quot;: &quot;Home Health Aide&quot;,
            &quot;years_of_experience&quot;: 9,
            &quot;salary_from&quot;: 1351,
            &quot;salary_to&quot;: 4030,
            &quot;linkedin_url&quot;: &quot;http://www.rath.com/possimus-magni-illo-ad-maiores-quibusdam-esse&quot;,
            &quot;status&quot;: &quot;rejected&quot;,
            &quot;skills&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;PHP&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Swift&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Ruby&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                }
            ],
            &quot;cv_url&quot;: &quot;http://www.swift.biz/&quot;,
            &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;first_name&quot;: &quot;Ruby&quot;,
            &quot;last_name&quot;: &quot;Harris&quot;,
            &quot;email&quot;: &quot;dlangworth@example.org&quot;,
            &quot;phone&quot;: &quot;+1-909-379-7318&quot;,
            &quot;position&quot;: &quot;Heating Equipment Operator&quot;,
            &quot;years_of_experience&quot;: 5,
            &quot;salary_from&quot;: 3457,
            &quot;salary_to&quot;: 2816,
            &quot;linkedin_url&quot;: &quot;http://www.tremblay.com/aut-voluptatibus-animi-atque-ipsum-qui-occaecati-sint-tempore&quot;,
            &quot;status&quot;: &quot;rejected&quot;,
            &quot;skills&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;PHP&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 5,
                    &quot;title&quot;: &quot;CSS&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 6,
                    &quot;title&quot;: &quot;Python&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;C#&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Ruby&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 10,
                    &quot;title&quot;: &quot;Kotlin&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;title&quot;: &quot;Go&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                }
            ],
            &quot;cv_url&quot;: &quot;http://www.oberbrunner.info/consequatur-enim-iure-fugiat-et-ex-voluptas&quot;,
            &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;first_name&quot;: &quot;Tad&quot;,
            &quot;last_name&quot;: &quot;Hermiston&quot;,
            &quot;email&quot;: &quot;schoen.jarred@example.com&quot;,
            &quot;phone&quot;: &quot;916.245.3533&quot;,
            &quot;position&quot;: &quot;Manager&quot;,
            &quot;years_of_experience&quot;: 7,
            &quot;salary_from&quot;: 3964,
            &quot;salary_to&quot;: 4775,
            &quot;linkedin_url&quot;: &quot;http://medhurst.com/dolores-molestiae-ratione-odit-est.html&quot;,
            &quot;status&quot;: &quot;rejected&quot;,
            &quot;skills&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;SQL&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 5,
                    &quot;title&quot;: &quot;CSS&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Swift&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 10,
                    &quot;title&quot;: &quot;Kotlin&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 12,
                    &quot;title&quot;: &quot;Go&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                }
            ],
            &quot;cv_url&quot;: &quot;https://www.schumm.com/sequi-autem-voluptate-est-qui-nam-beatae-pariatur&quot;,
            &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;first_name&quot;: &quot;Greta&quot;,
            &quot;last_name&quot;: &quot;Abbott&quot;,
            &quot;email&quot;: &quot;kertzmann.percy@example.net&quot;,
            &quot;phone&quot;: &quot;407-771-0945&quot;,
            &quot;position&quot;: &quot;Chemical Technician&quot;,
            &quot;years_of_experience&quot;: 10,
            &quot;salary_from&quot;: 2359,
            &quot;salary_to&quot;: 2642,
            &quot;linkedin_url&quot;: &quot;https://cremin.com/fugiat-placeat-quisquam-provident-consequatur.html&quot;,
            &quot;status&quot;: &quot;first_contact&quot;,
            &quot;skills&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;PHP&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 3,
                    &quot;title&quot;: &quot;JavaScript&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 6,
                    &quot;title&quot;: &quot;Python&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;C#&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Swift&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Ruby&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                }
            ],
            &quot;cv_url&quot;: &quot;http://www.weissnat.org/eum-et-dolor-odit&quot;,
            &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;first_name&quot;: &quot;Robin&quot;,
            &quot;last_name&quot;: &quot;Dach&quot;,
            &quot;email&quot;: &quot;pablo26@example.org&quot;,
            &quot;phone&quot;: &quot;+1-442-612-4124&quot;,
            &quot;position&quot;: &quot;Sports Book Writer&quot;,
            &quot;years_of_experience&quot;: 9,
            &quot;salary_from&quot;: 2720,
            &quot;salary_to&quot;: 2727,
            &quot;linkedin_url&quot;: &quot;http://www.feest.biz/&quot;,
            &quot;status&quot;: &quot;tech_assignment&quot;,
            &quot;skills&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;title&quot;: &quot;SQL&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 7,
                    &quot;title&quot;: &quot;C#&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 8,
                    &quot;title&quot;: &quot;Swift&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 9,
                    &quot;title&quot;: &quot;Ruby&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                },
                {
                    &quot;id&quot;: 10,
                    &quot;title&quot;: &quot;Kotlin&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null
                }
            ],
            &quot;cv_url&quot;: &quot;http://hirthe.com/&quot;,
            &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8008/api/v1/candidates?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8008/api/v1/candidates?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8008/api/v1/candidates?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8008/api/v1/candidates&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 10,
        &quot;total&quot;: 10
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-candidates" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-candidates"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-candidates"></code></pre>
</span>
<span id="execution-error-GETapi-v1-candidates" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-candidates"></code></pre>
</span>
<form id="form-GETapi-v1-candidates" data-method="GET"
      data-path="api/v1/candidates"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-candidates', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-candidates"
                    onclick="tryItOut('GETapi-v1-candidates');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-candidates"
                    onclick="cancelTryOut('GETapi-v1-candidates');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-candidates" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/candidates</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-v1-candidates">POST api/v1/candidates</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-candidates">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8008/api/v1/candidates" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "first_name=pccmbcevrlyvufnkucebjxfahvwyerrnivjchmuyzrompqngbdvqcgnqjtbdvxhwdfryfzsirrskhqxffenhggpjumkjgm" \
    --form "last_name=ubjemizcmteknlfsplcnmlfqlsiqiwkcuhtfaycrivswnnymhkweopxgtndtp" \
    --form "email=tptgudiq" \
    --form "phone=amiuiwsyvyxdyltcxpcczamslmjwooxxxtcndpdcirdejohappizwwqbxtuvpdqkojutsplhcvjneylfdodwldsxcayejkaquofcfvmftzkvbvohzrbafiwqyufcosfhkfxgkfqtsxtzjxbbmqexvkgpiniwemgawphggmgjfpdxqhpggpedevfnpchvocrhsikepndtimybwzeyxwewsslwopwevvquab" \
    --form "position=izkzrajmgbnxdyfenidptnvoifsuimzrswrzcrlxhobjszdbawlhvtrginsoufmjcioao" \
    --form "years_of_experience=0" \
    --form "salary_from=0" \
    --form "salary_to=9" \
    --form "linkedin_url=tqqtchyjdtnnhiewnhgsmbhxgqaqgasoobvzyjbgigoenrubytranqdvxmkyiygcviwmqvvgekjnmqkovpptqoaisjnwmemxslqhtthertyzluhgqcsydfoa" \
    --form "status=initial" \
    --form "skills[]=omnis" \
    --form "cv=@/tmp/phpVsN3cn" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/candidates"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('first_name', 'pccmbcevrlyvufnkucebjxfahvwyerrnivjchmuyzrompqngbdvqcgnqjtbdvxhwdfryfzsirrskhqxffenhggpjumkjgm');
body.append('last_name', 'ubjemizcmteknlfsplcnmlfqlsiqiwkcuhtfaycrivswnnymhkweopxgtndtp');
body.append('email', 'tptgudiq');
body.append('phone', 'amiuiwsyvyxdyltcxpcczamslmjwooxxxtcndpdcirdejohappizwwqbxtuvpdqkojutsplhcvjneylfdodwldsxcayejkaquofcfvmftzkvbvohzrbafiwqyufcosfhkfxgkfqtsxtzjxbbmqexvkgpiniwemgawphggmgjfpdxqhpggpedevfnpchvocrhsikepndtimybwzeyxwewsslwopwevvquab');
body.append('position', 'izkzrajmgbnxdyfenidptnvoifsuimzrswrzcrlxhobjszdbawlhvtrginsoufmjcioao');
body.append('years_of_experience', '0');
body.append('salary_from', '0');
body.append('salary_to', '9');
body.append('linkedin_url', 'tqqtchyjdtnnhiewnhgsmbhxgqaqgasoobvzyjbgigoenrubytranqdvxmkyiygcviwmqvvgekjnmqkovpptqoaisjnwmemxslqhtthertyzluhgqcsydfoa');
body.append('status', 'initial');
body.append('skills[]', 'omnis');
body.append('cv', document.querySelector('input[name="cv"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-candidates">
</span>
<span id="execution-results-POSTapi-v1-candidates" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-candidates"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-candidates"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-candidates" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-candidates"></code></pre>
</span>
<form id="form-POSTapi-v1-candidates" data-method="POST"
      data-path="api/v1/candidates"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-candidates', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-candidates"
                    onclick="tryItOut('POSTapi-v1-candidates');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-candidates"
                    onclick="cancelTryOut('POSTapi-v1-candidates');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-candidates" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/candidates</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="first_name"
               data-endpoint="POSTapi-v1-candidates"
               value="pccmbcevrlyvufnkucebjxfahvwyerrnivjchmuyzrompqngbdvqcgnqjtbdvxhwdfryfzsirrskhqxffenhggpjumkjgm"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="POSTapi-v1-candidates"
               value="ubjemizcmteknlfsplcnmlfqlsiqiwkcuhtfaycrivswnnymhkweopxgtndtp"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-candidates"
               value="tptgudiq"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="POSTapi-v1-candidates"
               value="amiuiwsyvyxdyltcxpcczamslmjwooxxxtcndpdcirdejohappizwwqbxtuvpdqkojutsplhcvjneylfdodwldsxcayejkaquofcfvmftzkvbvohzrbafiwqyufcosfhkfxgkfqtsxtzjxbbmqexvkgpiniwemgawphggmgjfpdxqhpggpedevfnpchvocrhsikepndtimybwzeyxwewsslwopwevvquab"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>position</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="position"
               data-endpoint="POSTapi-v1-candidates"
               value="izkzrajmgbnxdyfenidptnvoifsuimzrswrzcrlxhobjszdbawlhvtrginsoufmjcioao"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>years_of_experience</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="years_of_experience"
               data-endpoint="POSTapi-v1-candidates"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 0.</p>
        </p>
                <p>
            <b><code>salary_from</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="salary_from"
               data-endpoint="POSTapi-v1-candidates"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 0.</p>
        </p>
                <p>
            <b><code>salary_to</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="salary_to"
               data-endpoint="POSTapi-v1-candidates"
               value="9"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>linkedin_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="linkedin_url"
               data-endpoint="POSTapi-v1-candidates"
               value="tqqtchyjdtnnhiewnhgsmbhxgqaqgasoobvzyjbgigoenrubytranqdvxmkyiygcviwmqvvgekjnmqkovpptqoaisjnwmemxslqhtthertyzluhgqcsydfoa"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>cv</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="cv"
               data-endpoint="POSTapi-v1-candidates"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be a file. Must not be greater than 8192 kilobytes.</p>
        </p>
                <p>
            <b><code>status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="status"
               data-endpoint="POSTapi-v1-candidates"
               value="initial"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>initial</code>, <code>first_contact</code>, <code>interview</code>, <code>tech_assignment</code>, <code>rejected</code>, or <code>hired</code>.</p>
        </p>
                <p>
            <b><code>skills</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="skills[0]"
               data-endpoint="POSTapi-v1-candidates"
               data-component="body" hidden>
        <input type="text"
               name="skills[1]"
               data-endpoint="POSTapi-v1-candidates"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-v1-candidates--id-">GET api/v1/candidates/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-candidates--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8008/api/v1/candidates/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/candidates/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-candidates--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 30
x-ratelimit-remaining: 28
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;first_name&quot;: &quot;Vance&quot;,
    &quot;last_name&quot;: &quot;Franecki&quot;,
    &quot;email&quot;: &quot;xcrona@example.com&quot;,
    &quot;phone&quot;: &quot;1-901-786-9070&quot;,
    &quot;position&quot;: &quot;Laundry OR Dry-Cleaning Worker&quot;,
    &quot;years_of_experience&quot;: 10,
    &quot;salary_from&quot;: 2435,
    &quot;salary_to&quot;: 2189,
    &quot;linkedin_url&quot;: &quot;https://www.block.com/enim-consequatur-iure-saepe-qui-vel-doloremque-similique&quot;,
    &quot;status&quot;: &quot;hired&quot;,
    &quot;skills&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;SQL&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;CSS&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;Python&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;title&quot;: &quot;C#&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 8,
            &quot;title&quot;: &quot;Swift&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 11,
            &quot;title&quot;: &quot;TypeScript&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 12,
            &quot;title&quot;: &quot;Go&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    ],
    &quot;cv_url&quot;: &quot;http://kerluke.org/et-vero-et-et-sint-reprehenderit&quot;,
    &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-candidates--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-candidates--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-candidates--id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-candidates--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-candidates--id-"></code></pre>
</span>
<form id="form-GETapi-v1-candidates--id-" data-method="GET"
      data-path="api/v1/candidates/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-candidates--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-candidates--id-"
                    onclick="tryItOut('GETapi-v1-candidates--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-candidates--id-"
                    onclick="cancelTryOut('GETapi-v1-candidates--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-candidates--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/candidates/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-v1-candidates--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the candidate.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-v1-candidates--id-">PUT api/v1/candidates/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-candidates--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8008/api/v1/candidates/1" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "first_name=gtbbmlskcgovqxivlvddylfnmdxpwzalnzdruyhauwawtlyortqhftogqwbpfyuxpxddhqrwwvsrwyrnsbsmoopb" \
    --form "last_name=onlfehetedvhnekvesjkocllesaeyyiovaowhisairqqhzirhcbxpxuwxnzubpbiowjbepxxrdelukkcosutgxooutykzpwbwjapnuoopmjsacojifr" \
    --form "email=lhfolbvfaeejfeempankzcfhcpvjdzidxcfoedxmfnkijkpixjxdejejwilldhvhocescuohcaohmqolzdefmgnpwpsalusxilcchreyhhwuukbpclgddqopsgbuzwothpfmrgxwdhlagtjcd" \
    --form "phone=ohjegluuflzpneywbtzzvkciydaxeuqhwsyiiedobbbsenknxtzlqsybpdcloppzuoesuaqbjdgwjnndzlpfjuefuthqosvcredstkgwohythwelegnaqnljzzhdbqdhgrqfrbbwmlfcomlhizhdsfnimoowlqagkmwuxobzecat" \
    --form "position=ryolyjghcozcrkasodiqjqcmesmdmbjtrgtuigomychubonvpzbyqrilrvhwdkmrjnvsrfaygzvfrhupdnfxrsoxqiwpodogyxygkeuxpckwtiosyqpuzejhtiqhuvczjqzepfftuegt" \
    --form "years_of_experience=0" \
    --form "salary_from=0" \
    --form "salary_to=20" \
    --form "linkedin_url=fynoayysjjujwziesrfbpeabfwkdbiwvuwlaxzjzrixlazacycsyjouhuwyofbdjswlulgahfqcjnftkfmlwqpphamstvifzemyiknpmjpselxvdvbzulrxze" \
    --form "skills[]=voluptatum" \
    --form "cv=@/tmp/phpP4uOPp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/candidates/1"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('first_name', 'gtbbmlskcgovqxivlvddylfnmdxpwzalnzdruyhauwawtlyortqhftogqwbpfyuxpxddhqrwwvsrwyrnsbsmoopb');
body.append('last_name', 'onlfehetedvhnekvesjkocllesaeyyiovaowhisairqqhzirhcbxpxuwxnzubpbiowjbepxxrdelukkcosutgxooutykzpwbwjapnuoopmjsacojifr');
body.append('email', 'lhfolbvfaeejfeempankzcfhcpvjdzidxcfoedxmfnkijkpixjxdejejwilldhvhocescuohcaohmqolzdefmgnpwpsalusxilcchreyhhwuukbpclgddqopsgbuzwothpfmrgxwdhlagtjcd');
body.append('phone', 'ohjegluuflzpneywbtzzvkciydaxeuqhwsyiiedobbbsenknxtzlqsybpdcloppzuoesuaqbjdgwjnndzlpfjuefuthqosvcredstkgwohythwelegnaqnljzzhdbqdhgrqfrbbwmlfcomlhizhdsfnimoowlqagkmwuxobzecat');
body.append('position', 'ryolyjghcozcrkasodiqjqcmesmdmbjtrgtuigomychubonvpzbyqrilrvhwdkmrjnvsrfaygzvfrhupdnfxrsoxqiwpodogyxygkeuxpckwtiosyqpuzejhtiqhuvczjqzepfftuegt');
body.append('years_of_experience', '0');
body.append('salary_from', '0');
body.append('salary_to', '20');
body.append('linkedin_url', 'fynoayysjjujwziesrfbpeabfwkdbiwvuwlaxzjzrixlazacycsyjouhuwyofbdjswlulgahfqcjnftkfmlwqpphamstvifzemyiknpmjpselxvdvbzulrxze');
body.append('skills[]', 'voluptatum');
body.append('cv', document.querySelector('input[name="cv"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-candidates--id-">
</span>
<span id="execution-results-PUTapi-v1-candidates--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-candidates--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-candidates--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-candidates--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-candidates--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-candidates--id-" data-method="PUT"
      data-path="api/v1/candidates/{id}"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-candidates--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-candidates--id-"
                    onclick="tryItOut('PUTapi-v1-candidates--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-candidates--id-"
                    onclick="cancelTryOut('PUTapi-v1-candidates--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-candidates--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/candidates/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/candidates/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-v1-candidates--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the candidate.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="first_name"
               data-endpoint="PUTapi-v1-candidates--id-"
               value="gtbbmlskcgovqxivlvddylfnmdxpwzalnzdruyhauwawtlyortqhftogqwbpfyuxpxddhqrwwvsrwyrnsbsmoopb"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="PUTapi-v1-candidates--id-"
               value="onlfehetedvhnekvesjkocllesaeyyiovaowhisairqqhzirhcbxpxuwxnzubpbiowjbepxxrdelukkcosutgxooutykzpwbwjapnuoopmjsacojifr"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="PUTapi-v1-candidates--id-"
               value="lhfolbvfaeejfeempankzcfhcpvjdzidxcfoedxmfnkijkpixjxdejejwilldhvhocescuohcaohmqolzdefmgnpwpsalusxilcchreyhhwuukbpclgddqopsgbuzwothpfmrgxwdhlagtjcd"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="PUTapi-v1-candidates--id-"
               value="ohjegluuflzpneywbtzzvkciydaxeuqhwsyiiedobbbsenknxtzlqsybpdcloppzuoesuaqbjdgwjnndzlpfjuefuthqosvcredstkgwohythwelegnaqnljzzhdbqdhgrqfrbbwmlfcomlhizhdsfnimoowlqagkmwuxobzecat"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>position</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="position"
               data-endpoint="PUTapi-v1-candidates--id-"
               value="ryolyjghcozcrkasodiqjqcmesmdmbjtrgtuigomychubonvpzbyqrilrvhwdkmrjnvsrfaygzvfrhupdnfxrsoxqiwpodogyxygkeuxpckwtiosyqpuzejhtiqhuvczjqzepfftuegt"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>years_of_experience</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="years_of_experience"
               data-endpoint="PUTapi-v1-candidates--id-"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 0.</p>
        </p>
                <p>
            <b><code>salary_from</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="salary_from"
               data-endpoint="PUTapi-v1-candidates--id-"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 0.</p>
        </p>
                <p>
            <b><code>salary_to</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="salary_to"
               data-endpoint="PUTapi-v1-candidates--id-"
               value="20"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>linkedin_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="linkedin_url"
               data-endpoint="PUTapi-v1-candidates--id-"
               value="fynoayysjjujwziesrfbpeabfwkdbiwvuwlaxzjzrixlazacycsyjouhuwyofbdjswlulgahfqcjnftkfmlwqpphamstvifzemyiknpmjpselxvdvbzulrxze"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>cv</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
                <input type="file"
               name="cv"
               data-endpoint="PUTapi-v1-candidates--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be a file. Must not be greater than 8192 kilobytes.</p>
        </p>
                <p>
            <b><code>skills</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="skills[0]"
               data-endpoint="PUTapi-v1-candidates--id-"
               data-component="body" hidden>
        <input type="text"
               name="skills[1]"
               data-endpoint="PUTapi-v1-candidates--id-"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-DELETEapi-v1-candidates--id-">DELETE api/v1/candidates/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-candidates--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8008/api/v1/candidates/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/candidates/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-candidates--id-">
</span>
<span id="execution-results-DELETEapi-v1-candidates--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-candidates--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-candidates--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-candidates--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-candidates--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-candidates--id-" data-method="DELETE"
      data-path="api/v1/candidates/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-candidates--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-candidates--id-"
                    onclick="tryItOut('DELETEapi-v1-candidates--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-candidates--id-"
                    onclick="cancelTryOut('DELETEapi-v1-candidates--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-candidates--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/candidates/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-v1-candidates--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the candidate.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-v1-skills">GET api/v1/skills</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-skills">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8008/api/v1/skills" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/skills"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-skills">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 30
x-ratelimit-remaining: 27
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;PHP&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;SQL&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;title&quot;: &quot;JavaScript&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;title&quot;: &quot;HTML&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;CSS&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;Python&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 7,
            &quot;title&quot;: &quot;C#&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 8,
            &quot;title&quot;: &quot;Swift&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 9,
            &quot;title&quot;: &quot;Ruby&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 10,
            &quot;title&quot;: &quot;Kotlin&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 11,
            &quot;title&quot;: &quot;TypeScript&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 12,
            &quot;title&quot;: &quot;Go&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8008/api/v1/skills?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8008/api/v1/skills?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8008/api/v1/skills?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8008/api/v1/skills&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 12,
        &quot;total&quot;: 12
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-skills" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-skills"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-skills"></code></pre>
</span>
<span id="execution-error-GETapi-v1-skills" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-skills"></code></pre>
</span>
<form id="form-GETapi-v1-skills" data-method="GET"
      data-path="api/v1/skills"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-skills', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-skills"
                    onclick="tryItOut('GETapi-v1-skills');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-skills"
                    onclick="cancelTryOut('GETapi-v1-skills');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-skills" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/skills</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-v1-skills">POST api/v1/skills</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-skills">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8008/api/v1/skills" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"ohcxyidgfvluqorgnzdytvnlyqcruyxwqwzkmjxtgexhrugpqhxzsdfsrfqpghkhtqnedzixzveivdqyivuxkngqsxqhyjcznqiampofkjejuzehvivceusrscezsfdmyqnoriwcxkkukjcpvyddpwdfmjvjhkzkiohsthqtzgsquodgfxocebdrpgpmwq\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/skills"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "ohcxyidgfvluqorgnzdytvnlyqcruyxwqwzkmjxtgexhrugpqhxzsdfsrfqpghkhtqnedzixzveivdqyivuxkngqsxqhyjcznqiampofkjejuzehvivceusrscezsfdmyqnoriwcxkkukjcpvyddpwdfmjvjhkzkiohsthqtzgsquodgfxocebdrpgpmwq"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-skills">
</span>
<span id="execution-results-POSTapi-v1-skills" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-skills"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-skills"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-skills" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-skills"></code></pre>
</span>
<form id="form-POSTapi-v1-skills" data-method="POST"
      data-path="api/v1/skills"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-skills', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-skills"
                    onclick="tryItOut('POSTapi-v1-skills');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-skills"
                    onclick="cancelTryOut('POSTapi-v1-skills');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-skills" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/skills</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-v1-skills"
               value="ohcxyidgfvluqorgnzdytvnlyqcruyxwqwzkmjxtgexhrugpqhxzsdfsrfqpghkhtqnedzixzveivdqyivuxkngqsxqhyjcznqiampofkjejuzehvivceusrscezsfdmyqnoriwcxkkukjcpvyddpwdfmjvjhkzkiohsthqtzgsquodgfxocebdrpgpmwq"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-GETapi-v1-skills--id-">GET api/v1/skills/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-skills--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8008/api/v1/skills/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/skills/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-skills--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 30
x-ratelimit-remaining: 26
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;title&quot;: &quot;PHP&quot;,
    &quot;created_at&quot;: null,
    &quot;updated_at&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-skills--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-skills--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-skills--id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-skills--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-skills--id-"></code></pre>
</span>
<form id="form-GETapi-v1-skills--id-" data-method="GET"
      data-path="api/v1/skills/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-skills--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-skills--id-"
                    onclick="tryItOut('GETapi-v1-skills--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-skills--id-"
                    onclick="cancelTryOut('GETapi-v1-skills--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-skills--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/skills/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-v1-skills--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the skill.</p>
            </p>
                    </form>

            <h2 id="endpoints-PUTapi-v1-skills--id-">PUT api/v1/skills/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-skills--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8008/api/v1/skills/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"qrqqugkymrprkujqvtdrfkqcsotqwjtzxyhlwvzamtlxjeqxqchjhnkhdqvdnndusbjuroijblckcqgyw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/skills/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "qrqqugkymrprkujqvtdrfkqcsotqwjtzxyhlwvzamtlxjeqxqchjhnkhdqvdnndusbjuroijblckcqgyw"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-skills--id-">
</span>
<span id="execution-results-PUTapi-v1-skills--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-skills--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-skills--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-skills--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-skills--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-skills--id-" data-method="PUT"
      data-path="api/v1/skills/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-skills--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-skills--id-"
                    onclick="tryItOut('PUTapi-v1-skills--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-skills--id-"
                    onclick="cancelTryOut('PUTapi-v1-skills--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-skills--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/skills/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/skills/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-v1-skills--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the skill.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="PUTapi-v1-skills--id-"
               value="qrqqugkymrprkujqvtdrfkqcsotqwjtzxyhlwvzamtlxjeqxqchjhnkhdqvdnndusbjuroijblckcqgyw"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
        </form>

            <h2 id="endpoints-DELETEapi-v1-skills--id-">DELETE api/v1/skills/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-skills--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8008/api/v1/skills/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/skills/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-skills--id-">
</span>
<span id="execution-results-DELETEapi-v1-skills--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-skills--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-skills--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-skills--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-skills--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-skills--id-" data-method="DELETE"
      data-path="api/v1/skills/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-skills--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-skills--id-"
                    onclick="tryItOut('DELETEapi-v1-skills--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-skills--id-"
                    onclick="cancelTryOut('DELETEapi-v1-skills--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-skills--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/skills/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-v1-skills--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the skill.</p>
            </p>
                    </form>

            <h2 id="endpoints-PATCHapi-v1-candidates--candidate_id--changeStatus">PATCH api/v1/candidates/{candidate_id}/changeStatus</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-candidates--candidate_id--changeStatus">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8008/api/v1/candidates/1/changeStatus" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"first_contact\",
    \"comment\": \"voluptatem\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/candidates/1/changeStatus"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "first_contact",
    "comment": "voluptatem"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-candidates--candidate_id--changeStatus">
</span>
<span id="execution-results-PATCHapi-v1-candidates--candidate_id--changeStatus" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-candidates--candidate_id--changeStatus"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-candidates--candidate_id--changeStatus"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-candidates--candidate_id--changeStatus" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-candidates--candidate_id--changeStatus"></code></pre>
</span>
<form id="form-PATCHapi-v1-candidates--candidate_id--changeStatus" data-method="PATCH"
      data-path="api/v1/candidates/{candidate_id}/changeStatus"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-candidates--candidate_id--changeStatus', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-candidates--candidate_id--changeStatus"
                    onclick="tryItOut('PATCHapi-v1-candidates--candidate_id--changeStatus');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-candidates--candidate_id--changeStatus"
                    onclick="cancelTryOut('PATCHapi-v1-candidates--candidate_id--changeStatus');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-candidates--candidate_id--changeStatus" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/candidates/{candidate_id}/changeStatus</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>candidate_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="candidate_id"
               data-endpoint="PATCHapi-v1-candidates--candidate_id--changeStatus"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the candidate.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="status"
               data-endpoint="PATCHapi-v1-candidates--candidate_id--changeStatus"
               value="first_contact"
               data-component="body" hidden>
    <br>
<p>Must be one of <code>initial</code>, <code>first_contact</code>, <code>interview</code>, <code>tech_assignment</code>, <code>rejected</code>, or <code>hired</code>.</p>
        </p>
                <p>
            <b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="comment"
               data-endpoint="PATCHapi-v1-candidates--candidate_id--changeStatus"
               value="voluptatem"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-v1-candidates--candidate_id--skills">GET api/v1/candidates/{candidate_id}/skills</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-candidates--candidate_id--skills">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8008/api/v1/candidates/1/skills" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/candidates/1/skills"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-candidates--candidate_id--skills">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 30
x-ratelimit-remaining: 25
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 2,
        &quot;title&quot;: &quot;SQL&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 5,
        &quot;title&quot;: &quot;CSS&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 6,
        &quot;title&quot;: &quot;Python&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 7,
        &quot;title&quot;: &quot;C#&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 8,
        &quot;title&quot;: &quot;Swift&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 11,
        &quot;title&quot;: &quot;TypeScript&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 12,
        &quot;title&quot;: &quot;Go&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-candidates--candidate_id--skills" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-candidates--candidate_id--skills"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-candidates--candidate_id--skills"></code></pre>
</span>
<span id="execution-error-GETapi-v1-candidates--candidate_id--skills" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-candidates--candidate_id--skills"></code></pre>
</span>
<form id="form-GETapi-v1-candidates--candidate_id--skills" data-method="GET"
      data-path="api/v1/candidates/{candidate_id}/skills"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-candidates--candidate_id--skills', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-candidates--candidate_id--skills"
                    onclick="tryItOut('GETapi-v1-candidates--candidate_id--skills');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-candidates--candidate_id--skills"
                    onclick="cancelTryOut('GETapi-v1-candidates--candidate_id--skills');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-candidates--candidate_id--skills" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/candidates/{candidate_id}/skills</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>candidate_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="candidate_id"
               data-endpoint="GETapi-v1-candidates--candidate_id--skills"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the candidate.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-v1-candidates--candidate_id--skills">POST api/v1/candidates/{candidate_id}/skills</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-candidates--candidate_id--skills">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8008/api/v1/candidates/1/skills" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/candidates/1/skills"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-candidates--candidate_id--skills">
</span>
<span id="execution-results-POSTapi-v1-candidates--candidate_id--skills" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-candidates--candidate_id--skills"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-candidates--candidate_id--skills"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-candidates--candidate_id--skills" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-candidates--candidate_id--skills"></code></pre>
</span>
<form id="form-POSTapi-v1-candidates--candidate_id--skills" data-method="POST"
      data-path="api/v1/candidates/{candidate_id}/skills"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-candidates--candidate_id--skills', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-candidates--candidate_id--skills"
                    onclick="tryItOut('POSTapi-v1-candidates--candidate_id--skills');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-candidates--candidate_id--skills"
                    onclick="cancelTryOut('POSTapi-v1-candidates--candidate_id--skills');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-candidates--candidate_id--skills" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/candidates/{candidate_id}/skills</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>candidate_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="candidate_id"
               data-endpoint="POSTapi-v1-candidates--candidate_id--skills"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the candidate.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-v1-candidates--candidate_id--timeline">GET api/v1/candidates/{candidate_id}/timeline</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-candidates--candidate_id--timeline">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8008/api/v1/candidates/1/timeline" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8008/api/v1/candidates/1/timeline"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-candidates--candidate_id--timeline">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 30
x-ratelimit-remaining: 24
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 1,
        &quot;candidate_id&quot;: 1,
        &quot;status_before&quot;: &quot;first_contact&quot;,
        &quot;status_after&quot;: &quot;initial&quot;,
        &quot;comment&quot;: &quot;Facere veniam aut libero labore fugit culpa. Est illo itaque sed maiores animi dolor qui. Accusantium repellendus ut molestias consequuntur.&quot;,
        &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;candidate_id&quot;: 1,
        &quot;status_before&quot;: &quot;tech_assignment&quot;,
        &quot;status_after&quot;: &quot;first_contact&quot;,
        &quot;comment&quot;: &quot;Molestiae assumenda alias omnis ipsam. Nobis itaque doloribus et aut culpa. Cum laborum quae consectetur nemo nisi beatae voluptas. Odit maiores ad aut est. Perferendis ut autem perferendis qui.&quot;,
        &quot;created_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-07-19T17:08:53.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-candidates--candidate_id--timeline" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-candidates--candidate_id--timeline"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-candidates--candidate_id--timeline"></code></pre>
</span>
<span id="execution-error-GETapi-v1-candidates--candidate_id--timeline" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-candidates--candidate_id--timeline"></code></pre>
</span>
<form id="form-GETapi-v1-candidates--candidate_id--timeline" data-method="GET"
      data-path="api/v1/candidates/{candidate_id}/timeline"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-candidates--candidate_id--timeline', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-candidates--candidate_id--timeline"
                    onclick="tryItOut('GETapi-v1-candidates--candidate_id--timeline');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-candidates--candidate_id--timeline"
                    onclick="cancelTryOut('GETapi-v1-candidates--candidate_id--timeline');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-candidates--candidate_id--timeline" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/candidates/{candidate_id}/timeline</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>candidate_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="candidate_id"
               data-endpoint="GETapi-v1-candidates--candidate_id--timeline"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the candidate.</p>
            </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
