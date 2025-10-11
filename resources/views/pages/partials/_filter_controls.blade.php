<!-- Filtre Catégories -->
<div>
    <label for="category-{{ $prefix }}" class="block text-sm font-medium text-gray-300 mb-2">Catégorie</label>
    <select name="category" id="category-{{ $prefix }}" class="w-full bg-gray-700 border-gray-600 rounded-md p-2 text-white focus:ring-amber-500 focus:border-amber-500">
        <option value="">Toutes</option>
        @foreach($categories as $cat)
            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
        @endforeach
    </select>
</div>

<!-- Filtre Couleur -->
<div>
    <label for="color-{{ $prefix }}" class="block text-sm font-medium text-gray-300 mb-2">Couleur</label>
    <select name="color" id="color-{{ $prefix }}" class="w-full bg-gray-700 border-gray-600 rounded-md p-2 text-white focus:ring-amber-500 focus:border-amber-500">
        <option value="">Toutes</option>
        @foreach($colors as $col)
            <option value="{{ $col }}" {{ request('color') == $col ? 'selected' : '' }}>{{ $col }}</option>
        @endforeach
    </select>
</div>
<!-- STYLE -->
<select name="style" id="{{ $prefix }}style" onchange="this.form.submit()" class="w-full bg-gray-700 border-gray-600 rounded-md p-2 text-white focus:ring-amber-500 focus:border-amber-500">
    <option value="">Tous les styles</option>
    @foreach($styles as $style)
        <option value="{{ $style }}" {{ request('style') == $style ? 'selected' : '' }}>{{ $style }}</option>
    @endforeach
</select>

<!-- Filtre Type -->
<div>
    <label for="type-{{ $prefix }}" class="block text-sm font-medium text-gray-300 mb-2">Type</label>
    <select name="type" id="type-{{ $prefix }}" class="w-full bg-gray-700 border-gray-600 rounded-md p-2 text-white focus:ring-amber-500 focus:border-amber-500">
        <option value="">Tous</option>
        @foreach($types as $typ)
            <option value="{{ $typ }}" {{ request('type') == $typ ? 'selected' : '' }}>{{ $typ }}</option>
        @endforeach
    </select>
</div>

<!-- Filtre Disponibilité -->
<div>
    <label class="block text-sm font-medium text-gray-300 mb-2">Disponibilité</label>
    <div class="flex space-x-2 bg-gray-700 rounded-md p-1">
        <div class="flex-1">
            <input type="radio" name="availability" value="" id="avail-tous-{{ $prefix }}" class="hidden" {{ !request('availability') ? 'checked' : '' }}>
            <label for="avail-tous-{{ $prefix }}" class="radio-label block text-center py-1 rounded-md cursor-pointer transition-colors text-sm">Tous</label>
        </div>
        <div class="flex-1">
            <input type="radio" name="availability" value="sale" id="avail-vente-{{ $prefix }}" class="hidden" {{ request('availability') == 'sale' ? 'checked' : '' }}>
            <label for="avail-vente-{{ $prefix }}" class="radio-label block text-center py-1 rounded-md cursor-pointer transition-colors text-sm">Vente</label>
        </div>
        <div class="flex-1">
            <input type="radio" name="availability" value="rent" id="avail-location-{{ $prefix }}" class="hidden" {{ request('availability') == 'rent' ? 'checked' : '' }}>
            <label for="avail-location-{{ $prefix }}" class="radio-label block text-center py-1 rounded-md cursor-pointer transition-colors text-sm">Location</label>
        </div>
    </div>
</div>

<!-- Filtres Spéciaux (Toggles) -->
<div class="pt-4 border-t border-gray-700 space-y-4 lg:pt-0 lg:border-t-0">
    <label for="bestseller-{{ $prefix }}" class="flex items-center space-x-3 cursor-pointer">
        <input type="checkbox" name="bestseller" id="bestseller-{{ $prefix }}" value="1" class="hidden toggle-checkbox" {{ request('bestseller') == '1' ? 'checked' : '' }}>
        <div class="toggle-switch bg-gray-600"></div>
        <span class="text-gray-300 font-medium">Meilleures Ventes</span>
    </label>
    <label for="new_collection-{{ $prefix }}" class="flex items-center space-x-3 cursor-pointer">
        <input type="checkbox" name="new_collection" id="new_collection-{{ $prefix }}" value="1" class="hidden toggle-checkbox" {{ request('new_collection') == '1' ? 'checked' : '' }}>
        <div class="toggle-switch bg-gray-600"></div>
        <span class="text-gray-300 font-medium">Nouvelle Collection</span>
    </label>
</div>

