@extends('layouts.app')

<sl-drawer label="Magnus Dashboard" placement="start" class="drawer-scrolling">
    
    <div>
        <sl-menu>
            <sl-menu-label>Fruits</sl-menu-label>
            <sl-menu-item value="apple">Apple</sl-menu-item>
            <sl-menu-item value="banana">Banana</sl-menu-item>
            <sl-menu-item value="orange">Orange</sl-menu-item>
            <sl-divider></sl-divider>
            <sl-menu-label>Vegetables</sl-menu-label>
            <sl-menu-item value="broccoli">Broccoli</sl-menu-item>
            <sl-menu-item value="carrot">Carrot</sl-menu-item>
            <sl-menu-item value="zucchini">Zucchini</sl-menu-item>
          </sl-menu>
    </div>

    <sl-button slot="footer" variant="primary">Fechar</sl-button>
  </sl-drawer>
  
  <sl-button variant="text" size="large">
    <sl-icon slot="prefix" name="gear"></sl-icon>
    Menu
  </sl-button>
  
  <script>
    const drawer = document.querySelector('.drawer-scrolling');
    const openButton = drawer.nextElementSibling;
    const closeButton = drawer.querySelector('sl-button[variant="primary"]');
  
    openButton.addEventListener('click', () => drawer.show());
    closeButton.addEventListener('click', () => drawer.hide());
  </script>