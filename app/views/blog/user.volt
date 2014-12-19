{% for post in posts%}
{% if post.username == username %}
{{ post.text }}<br>
{% endif %}
{% endfor %}