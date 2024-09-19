{% for post in posts %}
	<div class="note">
		<p>
			<span class="date">{{ post.date | date("d.m.Y H:i:s") }}</span>
			<span class="name">{{ post.author }}</span>
		</p>
		<p>{{ post.text }}</p>
	</div>	
{% endfor %}