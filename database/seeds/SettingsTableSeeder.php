<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Motion Gym',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Are you ready to get fit?',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings\\July2019\\74ac5HVkxjdQz2EB2EBa.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings\\July2019\\g2b3XERL0W0tAF3s892B.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Motion Gym Panel',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Welcome to your Admin. Panel.',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => 'settings\\July2019\\aZQ8rjcsvrUSwzSJhJaC.gif',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings\\July2019\\Aoqdp90iNVqWNC1Dk0NR.png',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'company.address',
                'display_name' => 'Address',
                'value' => 'Groom Lake,Nevada, USA',
                'details' => NULL,
                'type' => 'text',
                'order' => 7,
                'group' => 'Company',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'company.phone_primary',
                'display_name' => 'Phone Primary',
            'value' => '(+1) 1156841541',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 8,
                'group' => 'Company',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'company.phone_secondary',
                'display_name' => 'Phone Secondary',
                'value' => '35186413',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 9,
                'group' => 'Company',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'company.email_contact',
                'display_name' => 'Contact Email',
                'value' => 'contact@motion.gym',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 10,
                'group' => 'Company',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'company.history',
                'display_name' => 'History of the company',
                'value' => '<h1 style="text-align: center;"><strong>HISTORY</strong></h1>
<p>&nbsp;</p>
<p><img class="aligncenter wp-image-42978 size-full" style="display: block; margin-left: auto; margin-right: auto;" src="https://content.artofmanliness.com/uploads//2014/09/armor.png" alt="statue ancient greek warrior with spear shield battle helmet " width="446" height="500" data-original="https://content.artofmanliness.com/uploads//2014/09/armor.png" /></p>
<p>&nbsp;</p>
<p>Fitness, as we know it today, seems to be a relatively modern invention &ndash; something that started vaguely in the 70s with jogging and Jazzercise. But physical exercise obviously goes back much further than that, to a time where people wouldn&rsquo;t have thought of it as working out, but rather a way of life. Centuries and millennia ago, they did not have all the machines and weights and gyms that we have today, and yet they were in better shape than we are. To understand why this is, how we got to our modern fitness culture, and what we have lost along the way, it&rsquo;s helpful to take a look at the history of exercise.</p>
<p>from <a href="https://www.artofmanliness.com/articles/the-history-of-physical-fitness/" target="_blank" rel="noopener">Art Of Manliness</a></p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 11,
                'group' => 'Company',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'company.vision',
                'display_name' => 'Company vision',
                'value' => '<h1 style="text-align: center;"><strong>VISION</strong></h1>
<p>&nbsp;</p>
<p>A vision statement is a declaration of an organization&rsquo;s overarching objective or goal. We refer to it as the DREAMING piece &mdash; if everything goes right, it is how your organization will change the world.</p>
<p>From <a href="https://www.themarketingblender.com/vision-mission-statements/" target="_blank" rel="noopener">The Marketing Blender</a></p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 12,
                'group' => 'Company',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'company.mision',
                'display_name' => 'Company mision',
                'value' => '<h1 style="text-align: center;"><strong>MISION</strong></h1>
<p>A mission statement is a formal summary of values of an organization. We call it the DOING piece &mdash; it describes how you act as a servant leader. It proclaims who you serve, what you serve and how you do it every day.</p>
<p>From <a href="https://www.themarketingblender.com/vision-mission-statements/" target="_blank" rel="noopener">The Marketing Blender</a></p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 18,
                'group' => 'Company',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'site-main-pages.banner',
                'display_name' => 'Banner',
                'value' => 'settings\\August2019\\CCLnFxiubmPhRaqH9Izg.jpg',
                'details' => NULL,
                'type' => 'image',
                'order' => 13,
                'group' => 'Site Main Pages',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'site-main-pages.gym_tour',
            'display_name' => 'Gym tour video (Youtube)',
                'value' => 'https://www.youtube.com/watch?v=HpM6bRZY4Hc',
                'details' => NULL,
                'type' => 'text',
                'order' => 14,
                'group' => 'Site Main Pages',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'site-main-pages.gym_tour_background',
                'display_name' => 'Gym tour background',
                'value' => 'settings\\August2019\\NiDmAbnZxJXYvzFNLODj.jpg',
                'details' => NULL,
                'type' => 'image',
                'order' => 15,
                'group' => 'Site Main Pages',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'site-main-pages.gym_tour_message',
                'display_name' => 'Gym tour message',
                'value' => 'A videos awesome about our gym!!',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 16,
                'group' => 'Site Main Pages',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'admin.creator',
            'display_name' => 'Admin Creator (Leave empty to remove)',
                'value' => '<a href="https://github.com/cristianmarint" target="_blank" style="color: inherit;text-decoration: none;">Cristian Marín</a>',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 17,
                'group' => 'Admin',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'company.conditions',
                'display_name' => 'Conditions of service',
                'value' => '<h1>Welcome to Motion.Gym</h1>
<p><br />&nbsp;&nbsp;&nbsp; These terms and conditions outline the rules and regulations for the use of motion.gym\'s Website.&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;motion.gym is located at: <br />&nbsp;&nbsp;&nbsp; Groom Lake Groom Lake - Nevada , USA<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; By accessing this website we assume you accept these terms and conditions in full. Do not continue to use motion.gym\'s website <br />&nbsp;&nbsp;&nbsp; if you do not accept all of the terms and conditions stated on this page.<br />&nbsp;&nbsp;&nbsp; The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice<br />&nbsp;&nbsp;&nbsp; and any or all Agreements: "Client", "You" and "Your" refers to you, the person accessing this website<br />&nbsp;&nbsp;&nbsp; and accepting the Company\'s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers<br />&nbsp;&nbsp;&nbsp; to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves, or either the Client<br />&nbsp;&nbsp;&nbsp; or ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake<br />&nbsp;&nbsp;&nbsp; the process of our assistance to the Client in the most appropriate manner, whether by formal meetings<br />&nbsp;&nbsp;&nbsp; of a fixed duration, or any other means, for the express purpose of meeting the Client\'s needs in respect<br />&nbsp;&nbsp;&nbsp; of provision of the Company\'s stated services/products, in accordance with and subject to, prevailing law<br />&nbsp;&nbsp;&nbsp; of USA. Any use of the above terminology or other words in the singular, plural,<br />&nbsp;&nbsp;&nbsp; capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.Cookies<br />&nbsp;&nbsp;&nbsp; We employ the use of cookies. By using motion.gym\'s website you consent to the use of cookies <br />&nbsp;&nbsp;&nbsp; in accordance with motion.gym\'s privacy policy.Most of the modern day interactive web sites<br />&nbsp;&nbsp;&nbsp; use cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site<br />&nbsp;&nbsp;&nbsp; to enable the functionality of this area and ease of use for those people visiting. Some of our <br />&nbsp;&nbsp;&nbsp; affiliate / advertising partners may also use cookies.License<br />&nbsp;&nbsp;&nbsp; Unless otherwise stated, motion.gym and/or it\'s licensors own the intellectual property rights for<br />&nbsp;&nbsp;&nbsp; all material on motion.gym. All intellectual property rights are reserved. You may view and/or print<br />&nbsp;&nbsp;&nbsp; pages from http://www.Motion.Gym for your own personal use subject to restrictions set in these terms and conditions.<br />&nbsp;&nbsp;&nbsp; You must not:<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Republish material from http://www.Motion.Gym<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Sell, rent or sub-license material from http://www.Motion.Gym<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Reproduce, duplicate or copy material from http://www.Motion.Gym<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; Redistribute content from motion.gym (unless content is specifically made for redistribution).<br />Hyperlinking to our Content<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; The following organizations may link to our Web site without prior written approval:<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Government agencies;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Search engines;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; News organizations;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Online directory distributors when they list us in the directory may link to our Web site in the same<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; manner as they hyperlink to the Web sites of other listed businesses; and<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Systemwide Accredited Businesses except soliciting non-profit organizations, charity shopping malls,<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; and charity fundraising groups which may not hyperlink to our Web site.<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; These organizations may link to our home page, to publications or to other Web site information so long<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; as the link: (a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; approval of the linking party and its products or services; and (c) fits within the context of the linking<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; party\'s site.<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; We may consider and approve in our sole discretion other link requests from the following types of organizations:<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; commonly-known consumer and/or business information sources such as Chambers of Commerce, American<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Automobile Association, AARP and Consumers Union;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; dot.com community sites;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; associations or other groups representing charities, including charity giving sites,<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; online directory distributors;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; internet portals;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; accounting, law and consulting firms whose primary clients are businesses; and<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; educational institutions and trade associations.<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; We will approve link requests from these organizations if we determine that: (a) the link would not reflect<br />&nbsp;&nbsp;&nbsp; unfavorably on us or our accredited businesses (for example, trade associations or other organizations<br />&nbsp;&nbsp;&nbsp; representing inherently suspect types of business, such as work-at-home opportunities, shall not be allowed<br />&nbsp;&nbsp;&nbsp; to link); (b)the organization does not have an unsatisfactory record with us; (c) the benefit to us from<br />&nbsp;&nbsp;&nbsp; the visibility associated with the hyperlink outweighs the absence of ; and (d) where the<br />&nbsp;&nbsp;&nbsp; link is in the context of general resource information or is otherwise consistent with editorial content<br />&nbsp;&nbsp;&nbsp; in a newsletter or similar product furthering the mission of the organization.<br /><br />&nbsp;&nbsp;&nbsp; These organizations may link to our home page, to publications or to other Web site information so long as<br />&nbsp;&nbsp;&nbsp; the link: (a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or approval<br />&nbsp;&nbsp;&nbsp; of the linking party and it products or services; and (c) fits within the context of the linking party\'s<br />&nbsp;&nbsp;&nbsp; site.<br /><br />&nbsp;&nbsp;&nbsp; If you are among the organizations listed in paragraph 2 above and are interested in linking to our website,<br />&nbsp;&nbsp;&nbsp; you must notify us by sending an e-mail to contact@motion.gym.<br />&nbsp;&nbsp;&nbsp; Please include your name, your organization name, contact information (such as a phone number and/or e-mail<br />&nbsp;&nbsp;&nbsp; address) as well as the URL of your site, a list of any URLs from which you intend to link to our Web site,<br />&nbsp;&nbsp;&nbsp; and a list of the URL(s) on our site to which you would like to link. Allow 2-3 weeks for a response.<br /><br />&nbsp;&nbsp;&nbsp; Approved organizations may hyperlink to our Web site as follows:<br /><br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; By use of our corporate name; or<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; By use of the uniform resource locator (Web address) being linked to; or<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; By use of any other description of our Web site or material being linked to that makes sense within the<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; context and format of content on the linking party\'s site.<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; No use of motion.gym\'s logo or other artwork will be allowed for linking absent a trademark license<br />&nbsp;&nbsp;&nbsp; agreement.<br />Iframes<br />&nbsp;&nbsp;&nbsp; Without prior approval and express written permission, you may not create frames around our Web pages or<br />&nbsp;&nbsp;&nbsp; use other techniques that alter in any way the visual presentation or appearance of our Web site.<br />Reservation of Rights<br />&nbsp;&nbsp;&nbsp; We reserve the right at any time and in its sole discretion to request that you remove all links or any particular<br />&nbsp;&nbsp;&nbsp; link to our Web site. You agree to immediately remove all links to our Web site upon such request. We also<br />&nbsp;&nbsp;&nbsp; reserve the right to amend these terms and conditions and its linking policy at any time. By continuing<br />&nbsp;&nbsp;&nbsp; to link to our Web site, you agree to be bound to and abide by these linking terms and conditions.<br />Removal of links from our website<br />&nbsp;&nbsp;&nbsp; If you find any link on our Web site or any linked web site objectionable for any reason, you may contact<br />&nbsp;&nbsp;&nbsp; us about this. We will consider requests to remove links but will have no obligation to do so or to respond<br />&nbsp;&nbsp;&nbsp; directly to you.<br />&nbsp;&nbsp;&nbsp; Whilst we endeavour to ensure that the information on this website is correct, we do not warrant its completeness<br />&nbsp;&nbsp;&nbsp; or accuracy; nor do we commit to ensuring that the website remains available or that the material on the<br />&nbsp;&nbsp;&nbsp; website is kept up to date.<br />Content Liability<br />&nbsp;&nbsp;&nbsp; We shall have no responsibility or liability for any content appearing on your Web site. You agree to indemnify<br />&nbsp;&nbsp;&nbsp; and defend us against all claims arising out of or based upon your Website. No link(s) may appear on any<br />&nbsp;&nbsp;&nbsp; page on your Web site or within any context containing content or materials that may be interpreted as<br />&nbsp;&nbsp;&nbsp; libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or<br />&nbsp;&nbsp;&nbsp; other violation of, any third party rights.<br />Disclaimer<br />&nbsp;&nbsp;&nbsp; To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website (including, without limitation, any warranties implied by law in respect of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill). Nothing in this disclaimer will:<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; limit or exclude our or your liability for death or personal injury resulting from negligence;<br />&nbsp;&nbsp;&nbsp; limit or exclude our or your liability for fraud or fraudulent misrepresentation;<br />&nbsp;&nbsp;&nbsp; limit any of our or your liabilities in any way that is not permitted under applicable law; or<br />&nbsp;&nbsp;&nbsp; exclude any of our or your liabilities that may not be excluded under applicable law.<br />&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer: (a)<br />&nbsp;&nbsp;&nbsp; are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer or<br />&nbsp;&nbsp;&nbsp; in relation to the subject matter of this disclaimer, including liabilities arising in contract, in tort<br />&nbsp;&nbsp;&nbsp; (including negligence) and for breach of statutory duty.<br />&nbsp;&nbsp;&nbsp; To the extent that the website and the information and services on the website are provided free of charge,<br />&nbsp;&nbsp;&nbsp; we will not be liable for any loss or damage of any nature.<br /><br />&nbsp;&nbsp;&nbsp; <br />Credit &amp; Contact Information<br />&nbsp;&nbsp;&nbsp; This Terms and conditions page was created at termsandconditionstemplate.com generator. If you have<br />&nbsp;&nbsp;&nbsp; any queries regarding any of our terms, please contact us.</p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 19,
                'group' => 'Company',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'company.policy',
                'display_name' => 'Privacy policy',
                'value' => '<h1>Welcome to our Privacy Policy</h1>
<p><br />-- Your privacy is critically important to us.<br />Motion.gym is located at:<br /><br />Motion.gym<br />Groom Lake <br />Nevada, USA<br />1156841541<br />It is Motion.gym\'s policy to respect your privacy regarding any information we may collect while operating our website. This Privacy Policy applies to www.Motion.Gym (hereinafter, "us", "we", or "www.Motion.Gym"). We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.<br />This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>
<h3><br />- Website Visitors</h3>
<p><br />Like most website operators, Motion.gym collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. Motion.gym\'s purpose in collecting non-personally identifying information is to better understand how Motion.gym\'s visitors use its website. From time to time, Motion.gym may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.<br />Motion.gym also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and for users leaving comments on http://www.Motion.Gym blog posts. Motion.gym only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below.</p>
<h3><br />- Gathering of Personally-Identifying Information</h3>
<p><br />Certain visitors to Motion.gym\'s websites choose to interact with Motion.gym in ways that require Motion.gym to gather personally-identifying information. The amount and type of information that Motion.gym gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at http://www.Motion.Gym to provide a username and email address.</p>
<h3><br />- Security</h3>
<p><br />The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>
<h3><br />- Advertisements</h3>
<p><br />Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by Motion.gym and does not cover the use of cookies by any advertisers.<br /><br /></p>
<h3><br />- Links To External Sites</h3>
<p><br />Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party\'s site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit.<br />We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites, products or services.</p>
<h3><br />- www.Motion.Gym uses Google AdWords for remarketing</h3>
<p><br />Www.Motion.Gym uses the remarketing services to advertise on third party websites (including Google) to previous visitors to our site. It could mean that we advertise to previous visitors who haven\'t completed a task on our site, for example using the contact form to make an enquiry. This could be in the form of an advertisement on the Google search results page, or a site in the Google Display Network. Third-party vendors, including Google, use cookies to serve ads based on someone\'s past visits. Of course, any data collected will be used in accordance with our own privacy policy and Google\'s privacy policy.<br />You can set preferences for how Google advertises to you using the Google Ad Preferences page, and if you want to you can opt out of interest-based advertising entirely by cookie settings or permanently using a browser plugin.</p>
<h3><br />- Protection of Certain Personally-Identifying Information</h3>
<p><br />Motion.gym discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organizations that (i) need to know that information in order to process it on Motion.gym\'s behalf or to provide services available at Motion.gym\'s website, and (ii) that have agreed not to disclose it to others. Some of those employees, contractors and affiliated organizations may be located outside of your home country; by using Motion.gym\'s website, you consent to the transfer of such information to them. Motion.gym will not rent or sell potentially personally-identifying and personally-identifying information to anyone. Other than to its employees, contractors and affiliated organizations, as described above, Motion.gym discloses potentially personally-identifying and personally-identifying information only in response to a subpoena, court order or other governmental request, or when Motion.gym believes in good faith that disclosure is reasonably necessary to protect the property or rights of Motion.gym, third parties or the public at large.<br />If you are a registered user of http://www.Motion.Gym and have supplied your email address, Motion.gym may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date with what\'s going on with Motion.gym and our products. We primarily use our blog to communicate this type of information, so we expect to keep this type of email to a minimum. If you send us a request (for example via a support email or via one of our feedback mechanisms), we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users. Motion.gym takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.</p>
<h3><br />- Aggregated Statistics</h3>
<p><br />Motion.gym may collect statistics about the behavior of visitors to its website. Motion.gym may display this information publicly or provide it to others. However, Motion.gym does not disclose your personally-identifying information.<br /><br /></p>
<h3>- Affiliate Disclosure</h3>
<p><br />This site uses affiliate links and does earn a commission from certain links. This does not affect your purchases or the price you may pay.<br /><br /></p>
<h3>- Cookies</h3>
<p><br />To enrich and perfect your online experience, Motion.gym uses "Cookies", similar technologies and services provided by others to display personalized content, appropriate advertising and store your preferences on your computer.<br />A cookie is a string of information that a website stores on a visitor\'s computer, and that the visitor\'s browser provides to the website each time the visitor returns. Motion.gym uses cookies to help Motion.gym identify and track visitors, their usage of http://www.Motion.Gym, and their website access preferences. Motion.gym visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using Motion.gym\'s websites, with the drawback that certain features of Motion.gym\'s websites may not function properly without the aid of cookies.<br />By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to Motion.gym\'s use of cookies.</p>
<h3><br />- E-commerce</h3>
<p><br />Those who engage in transactions with Motion.gym &ndash; by purchasing Motion.gym\'s services or products, are asked to provide additional information, including as necessary the personal and financial information required to process those transactions. In each case, Motion.gym collects such information only insofar as is necessary or appropriate to fulfill the purpose of the visitor\'s interaction with Motion.gym. Motion.gym does not disclose personally-identifying information other than as described below. And visitors can always refuse to supply personally-identifying information, with the caveat that it may prevent them from engaging in certain website-related activities.</p>
<h3><br />- Business Transfers</h3>
<p><br />If Motion.gym, or substantially all of its assets, were acquired, or in the unlikely event that Motion.gym goes out of business or enters bankruptcy, user information would be one of the assets that is transferred or acquired by a third party. You acknowledge that such transfers may occur, and that any acquirer of Motion.gym may continue to use your personal information as set forth in this policy.<br /><br /></p>
<h3>Privacy Policy Changes</h3>
<p><br />Although most changes are likely to be minor, Motion.gym may change its Privacy Policy from time to time, and in Motion.gym\'s sole discretion. Motion.gym encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.<br /><br /><br />- Credit &amp; Contact Information<br />This privacy policy was created at https://termsandconditionstemplate.com/privacy-policy-generator/. If you have any questions about this Privacy Policy, please contact us via or phone.<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 22,
                'group' => 'Company',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'site-main-pages.carousel_background',
                'display_name' => 'Carousel background',
                'value' => 'settings\\August2019\\gF5DJeAPaWK92RGmKSXE.jpg',
                'details' => NULL,
                'type' => 'image',
                'order' => 20,
                'group' => 'Site Main Pages',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'site-main-pages.footer',
                'display_name' => 'Footer',
                'value' => 'settings\\August2019\\fD2ane4calqvnURmoXuc.jpg',
                'details' => NULL,
                'type' => 'image',
                'order' => 21,
                'group' => 'Site Main Pages',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'company.facebook',
                'display_name' => 'Facebook URL',
                'value' => 'https://www.facebook.com/',
                'details' => NULL,
                'type' => 'text',
                'order' => 23,
                'group' => 'Company',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'company.twitter',
                'display_name' => 'Twitter URL',
                'value' => 'https://www.twitter.com/',
                'details' => NULL,
                'type' => 'text',
                'order' => 24,
                'group' => 'Company',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'company.slogan',
                'display_name' => 'Slogan',
                'value' => 'Are you ready to get fit?',
                'details' => NULL,
                'type' => 'text',
                'order' => 6,
                'group' => 'Company',
            ),
        ));
        
        
    }
}