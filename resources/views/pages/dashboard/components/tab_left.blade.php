<sl-tab-group placement="start">
    <sl-tab slot="nav" panel="home">Home</sl-tab>
    <sl-tab slot="nav" panel="materiais">Materiais</sl-tab>
    <sl-tab slot="nav" panel="blog">Blog</sl-tab>
    <sl-tab slot="nav" panel="magnews">MagNews</sl-tab>
  
    <sl-tab-panel name="home">
        
        @include('pages/dashboard/views/edit_home')
    </sl-tab-panel>
    <sl-tab-panel name="materiais">Materiais</sl-tab-panel>
    <sl-tab-panel name="blog">Blog.</sl-tab-panel>
    <sl-tab-panel name="magnews">Magnews.</sl-tab-panel>
  </sl-tab-group>