<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
    <dt><strong>Shortcode</strong></dt>
    <dd><p>You can use shortcode for the display of the social share in the contents. Optionally You can enter the name of the networks you want to display. The networks will be displayed in the order of entered networks.
    <ul class="how-list">
        <li><strong>Clean shortcode:</strong> <code>[apss_share]</code></li>
        <li>Available shortcode parameters</li>
        <ul>
            <li>- networks : You can define which social medias to show in the shortcode. You need to enter the networks name in string in comma separated values. If you don't want to choose which social medias to appear in shortcode, you can discard this option. </li>
            <li>Available network parameters are: facebook, twitter, google-plus, pinterest, linkedin, digg, email, print</li>
            <li>- share_text: You can add the share text. To use share text use share_text='text to be shared'. If you don't use this parameter the share text will not appear in shortcode.</li>
            <li>- counter : You can enable or disable the share counter. To enable the share count use counter='1' and to disable it simply don't use counter parameter or use parameter counter='0'.</li>
            <li>- total_counter : You can enable or disable the total share counter. To enable the total share count use total_counter='1' and to disable it simply don't use total_counter parameter or use parameter total_counter='0'.</li>
            <li>- custom_share_link : You can enter the custom share link in case if the link provided by shortcode is not as per your need. To enable the custom share link use custom_share_link='custom link as per your need.'</li>
            <li>- http_count: You can set this option if you have moved your site from HTTP to HTTPS to show the share counts from your old http site as well. Please note that the share count will fetch if your site has been moved from HTTP to HTTPS eg if your old site was http://example.com and you have moved your site to https://example.com. But please not that if you have changed other url parameters then the count will not work for example if your old page slug was http://example.com/sample-page and you have changed it to https://example.com/sample-page-1 then the share counts will not work for old url.</li>
        </ul>
        <li><strong>Shortcode with settings: </strong><code>[apss_share networks='facebook, twitter, pinterest' share_text='Share it' counter='1' total_counter='1' http_count='1']</code></li>
    </ul>
    </p></dd>
    <dd>
    <p>You can use the below shortcode to display the share counts number only in the content using shortcode. You can wrap that number in your reqired html tags and use it as per your need. The share count displayed will be the sum of entered network attributes.
    <ul class="how-list">
        <li><strong>Clean shortcode 2:</strong> <code>[apss_count]</code></li>
        <li>Available Parameters
            <ul>
                <li>- network : You can define which social medias to show total share counts. You need to enter the networks name in string in comma separated values. You need to enter at least one network attribute.</li>
                <li>Available network parameters are: facebook, twitter, google-plus, pinterest, linkedin</li>
                <li><strong>Example 2:</strong> <code>[apss_count network='facebook, pinterest']</code></li>
                <li>This will show the sum of share counts from facebook and pinterest.</li>
            </ul>
            <ul>
                <li>- custom_url_link</li>
                <li>Now you can use attribute "custom_url_link" to fetch the share counts for custom url as well.</li>
                <li><strong>Example 3:</strong> <code>[apss_count network='facebook, pinterest' custom_url_link='<?php echo site_url('sample-page'); ?>']</code></li>
                <li>This attribute is useful in case if the shortcode is not fetching the share counts for shortcode placed url and force the shortcode to use the url from the attribute defined in  custom_url_link.</li>
            </ul>
        </li>
    </ul>
    </p>
    </dd>
</dl>