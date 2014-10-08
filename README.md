Atrigger-API-Codeigniter-Library
================================

Create Scheduled Tasks In Codeigniter Application using Atrigger PHP library, 

<h3>Getting Started</h3>
1) Create an account at Atrigger.com to obtain API key and Secret.

2) Define your API key and Secret in the Application/Config/trigger.php.

<h3>Example Usage</h3>
To create a scheduled task, in your controller,

<pre>
$this->load->library('Trigger');
$tags = array();
$tags['type']='test';
$this->trigger->doCreate("1month", "http://www.example.com/myTask?something", $tags);
</pre>

To delete a Task
<pre>
$this->load->library('Trigger');
$tags = array();
$tags['type']='test';
$this->trigger->doDelete($tags);
</pre>
You can have a look at all available functions <a href="http://atrigger.com/docs/wiki/14/library-php">here</a>
