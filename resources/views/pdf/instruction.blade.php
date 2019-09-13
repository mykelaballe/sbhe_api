<style type="text/css">
	* {
		font-family: Helvetica Neue,Arial,Helvetica,sans-serif;
	}
	p {
		padding:10px 0;
		border: 1px solid #878282;
		background-color: #e5e3e3;
		width: 100%;
		text-align: center;
		font-weight: 300;
		margin:15px 0;
	}
	p span {
		font-weight:100;
	}
	.table {
		width: 50%;
		float: left;
	}
	.table .label {
		width:40%;
	}
	.table .info {
		color:#519bd0;
	}
	.clear {
		clear: both;
	}
	img {
		display: inline-block;
		width:40%;
		height: 35%;  
		vertical-align: top;
		margin: 15px;
		margin-top: 0px;
	}
</style>
<p>
	INSTRUCTION<br>
	<span>({{ $date }})</span>
</p>
<div style="display: block; width:100%;">
	<table class="table">
		<tr>
			<td class="label">Title: </td>
			<td class="info">{{ $title }}</td>
		</tr>
		<tr>
			<td class="label">Location: </td>
			<td class="info">{{ $location }}</td>
		</tr>
		<tr>
			<td class="label">Ref No: </td>
			<td class="info">{{ $ref_no }}</td>
		</tr>
	</table>
	<table class="table">
		<tr>
			<td class="label">Start Date: </td>
			<td class="info">{{ $start_date }}</td>
		</tr>
		<tr>
			<td class="label">End Date: </td>
			<td class="info">{{ $end_date }}</td>
		</tr>
		<tr>
			<td class="label">Created By: </td>
			<td class="info">{{ $creator }}</td>
		</tr>
	</table>
	<div class="clear"></div>
</div>

<p>DESCRIPTION</p>
<span>{{ $description }}</span>

<p>REPLY</p>
<span>{{ $reply }}</span>

<p>BEFORE</p>
<div style="text-align: center;">
	@foreach($before_photos as $path)
		<img src="{{ $path }}" >
	@endforeach
</div>

<p>AFTER</p>
<div style="text-align: center;">
	@foreach($after_photos as $path)
		<img src="{{ $path }}" >
	@endforeach
</div>