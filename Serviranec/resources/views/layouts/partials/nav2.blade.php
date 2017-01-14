@if (Auth::user())
<div class="header2">
			<div class="glavca osebno">
			<?php $user = Auth::user();?>
			
				<div class="block"></div>
				 
				<div class="block2 osebno flex-sp-between">
					<a href="{{ url('/kosarica') }}" >Košarica</a>
					<a href="{{ url('/zelje') }}" >Seznam želja</a>
					<a href="{{ url('/zgodovina') }}" >Zgodovina</a>
					<a href="{{ URL::to("nastavitve/$user->name") }}" >Nastavitve</a>
				</div>
				
				<div class="block"></div>
				
			</div>
		</div>
		@endif