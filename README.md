# Ali G. Itineris Test Assignment.

This project contains the basic usage of my WordPress skills.

<h4>In this project these technology and libraries used.</h4>
<ul>
  <li><a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank">Bootstrap 5</a></li>
  <li><a href="https://getcomposer.org/" target="_blank">PHP Composer</a></li>
  <li><a href="https://wordpress.org/" target="_blank">WordPress, Open Source CMS</a></li>
  <li><a href="https://github.com/wp-premium/advanced-custom-fields-pro" target="_blank">Advanced Custom Fields Pro</a></li>
  <li><a href="https://github.com/StoutLogic/acf-builder" target="_blank">ACF Builder</a></li>
  <li><a href="https://www.advancedcustomfields.com/blog/acf-5-8-introducing-acf-blocks-for-gutenberg/" target="_blank">Gutenberg Blocks</a></li>
  <li><a href="https://sass-lang.com/" target="_blank">SASS</a></li>
  <li><a href="http://compass-style.org/" target="_blank">Compass Stylesheet Authoring Framework</a></li>
 </ul>

<h4>Core Hierarchy of Theme</h4>
<ul>
  <li>Custom Post Types are registered in core/register-post-type.php</li>
  <li>Custom Taxonomies are registered in core/register-taxonomy.php</li>
  <li>Custom Fields of Gutenberg block are registered in core/block-fields.php</li>
  <li>Custom Fields of Custom Post Type ( course ) are registered in core/post-fields.php</li>
</ul>

<h4>Decisions of project</h4>
<ul>
  <li>I used SASS to develop CSS, because we don't have to use another css compressing tool or plugin.</li>
  <li>I included Advanced Custom Fields in theme, we can more have control over plugin. I can update via github.</li>
  <li>I seperated custom post type, taxonomy and custom fields in different pages. That will prevent confilict and take more control over my project.</li>
  <li>Composer used for ACF Builder, instead of using UI of plugin, ACF Builder is more professional and developer friendly.</li>
  <li>I could not use images for Custom Post Type posts in Figma. In figma version they has low resolution and looks not great. I just found high resolution images, used them as dummy.</li>
</ul>

<h4>Bugs</h4>
<ul>
  <li>There is a bug of Bootstrap's built-in tooltip. It supposed to be showed at the top of content. But it shows up somewhere else. I guess it's from container. I could not figure out why it has happening. Sorry for that.</li>
  <span><i>No other bugs detected.</i></span>
</ul>

<h4>Installation</h4>
<ul>
  <li>Put theme folder into "wp-content/themes"</li>
  <li>In WordPress dashboard navigate into Appearance > Themes</li>
  <li>Select "AliGdzTest - Project" and press "Activate"</li>
  <li>For importing contents (cpt, taxonomy, posts) navigate into Tools > Import, Select Install Now button under WordPress label.</li>
  <li>After installation please proceed into Run Importer.</li>
  <li>You can find the xml file main directory of theme folder. Select it and import. That's it.</li>
</ul>

<h4>License</h4>
<ul>
  <li>This project has license of  GNU GENERAL PUBLIC LICENSE you can store and use this anytime you want.</li>
</ul>

<h4>Bug reporting or contacting</h4>
<ul>
  <li>You can contact me whenever you like for bug reporting or getting more details about Project.</li>
  <li>Phone : +90 538 981 30 35</li>
  <li>E-Mail : aliguduz1@gmail.com</li>
  <li>Telegram : @alyfawe1</li>
</ul>


<p>
Thanks for inspecting my Project. I'm looking forward to hear great news from you.
</p>
