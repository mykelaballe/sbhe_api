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
	Toolbox Meeting<br>
	<span>{{ $project }}</span>
	<span>({{ $date }})</span>
</p>
<div style="display: block; width:100%;">
	<table class="table">
		<tr>
			<td class="label">Safety: </td>
			<td class="info">{{ $safety }}</td>
		</tr>
		<tr>
			<td class="label">Supervisor: </td>
			<td class="info">{{ $supervisor }}</td>
		</tr>
		<tr>
			<td class="label">Worker: </td>
			<td class="info">{{ $worker }}</td>
		</tr>
	</table>
	<table class="table">
		<tr>
			<td class="label">Subcon: </td>
			<td class="info">{{ $subcon }}</td>
		</tr>
		<tr>
			<td class="label">Supply Labour: </td>
			<td class="info">{{ $supply_labour }}</td>
		</tr>
		<tr>
			<td class="label">Total: </td>
			<td class="info">{{ $total }}</td>
		</tr>
	</table>
	<div class="clear"></div>
</div>
<p>{{ $title }}</p>
<div style="text-align: center;">
	@foreach($images as $path)
		<img src="{{ $path }}" >
	@endforeach
</div>