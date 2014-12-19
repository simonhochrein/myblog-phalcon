<?php if(count($posts)==0){echo 'no posts';}?>
<br>
{% for post in posts %}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title" align="left">
{{ post.username }}
            </h3>
        </div>
        <div class="panel-body">
        <h3>
            {{ post.text }}
        </h3>
        </div>

        <div class="panel panel-default" align="left">
        <h4>comments</h4>


{% for comment in comments %}
    {% if comment.post_id == post.post_id %}
        <div class="panel panel-default" style="width: 500px">
            <div class="panel-heading">
                <div class="panel-title">
                    <a href="user/{{ comment.username }}">{{ comment.username }}</a> commented on <a href="user/{{ post.username }}">{{ post.username }}</a>'s post
                </div>
            </div>
            <div class="panel-body">
            {{ comment.comment_text }}<br>
                </div>
        </div>
    {% endif %}
{% endfor %}
            </div>
            </div>
    </div>
{% endfor %}

