---
layout: page
permalink: /news/
---

<!-- TODO: Make this look good-->

{% for post in site.posts %}
{{ post.date | date: '%B %d, %Y'}} : [{{post.title}}]({{post.url}})
{% endfor %}

