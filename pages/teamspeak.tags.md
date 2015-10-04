---
layout: page
permalink: /teamspeak/tags/
---
<p style="text-align: left">
{% for tag in site.data.tags %}
    <img src="/assets/images/tags/{{tag.icon}}.png"> <b>{{tag.name}}</b>: {{tag.toget}}<br>
{% endfor %}
</p>