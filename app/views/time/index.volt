{% if acl['id'] %}
    {% if acl['admin'] == 'Y' %}
        <div class="page-header">
            <h2>Hello {{ acl['name'] }}</h2>
        </div>

        <p>
        This is a sample application for the <a href="http://phalconphp.com">Phalcon Framework</a>. We expect to implement as many features as possible to show how the framework works and its potential.
        Please write us if you have any feedback or comments. Feel free to clone the code of this application <a href="https://github.com/phalcon/invo">here</a>
        .Thanks!.

        </p>
    {% else %}
        Sorry, you do not have permission to view this page.
    {% endif %}
{% else %}
You need to be logged in to view this page.
{% endif %}