Atrigger-API-Codeigniter-Library
================================

Create Scheduled Tasks In Codeigniter Application using Atrigger PHP library, 

<h3>Getting Started</h3>
1) Create an account at Atrigger.com to obtain API key and Secret.

2) Define your API key and Secret in the Config/trigger.php.

<h3>Example Usage</h3>
To create a scheduled task, in your controller,

<pre>
$this->load->library('Trigger');
$this->trigger->doCreate();
</pre>
