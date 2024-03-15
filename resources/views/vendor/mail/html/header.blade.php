@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="http://quanlynhansu.org/gn24-v2/img/logo.png" width="250" class="logo" alt="GN24">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
