---
layout: page
permalink: /teamspeak/tags/
---

<!-- TODO: Dirty dirty dirty -->
<style>
section {
    text-align:left
}
</style>

{% for tag in site.data.tags %}![](/assets/images/tags/{{tag.icon}}.png)**{{tag.name}}**: {{tag.toget}}  
{% endfor %}
