<div class="products-sort__sort">
    <span>Sort by: </span>
    <button data-type="onNewLine" class="js_ac_sortBy @if($filters['sortBy'] == 'onNewLine') active @endif" >New lines</button>
    <button data-type="onMostPopular" class="js_ac_sortBy @if($filters['sortBy'] == 'onMostPopular') active @endif" >Popular</button>
    <button data-type="onSale" class="js_ac_sortBy @if($filters['sortBy'] == 'onSale') active @endif">On sale</button>
</div>
<input type="hidden" class="sortByVal" value="onNewLine">