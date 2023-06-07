<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>

          @can("manager")


        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>Vue globale</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-swatchbook"></i>
                  <p>Retraits</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-swatchbook"></i>
              <p>Statistique</p>
            </a>
          </li>
        </ul>
    </li>
        @endcan

        @can("admin")

        <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Habilitations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{setMenuClass('admin.habilitations.users.index')}}"
                class="nav-link "
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-fingerprint"></i>
                  <p>Roles et permissions</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Gestion attestations
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#"
                        class="nav-link ">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Type d'attestation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Attestations</p>
                    </a>
                </li>

            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#"
                        class="nav-link ">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Reception</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Traitements</p>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item ">
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Gestion du duplicata
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#"
                        class="nav-link ">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Type d'attestation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Attestations</p>
                    </a>
                </li>

            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#"
                        class="nav-link ">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Reception</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Traitements</p>
                    </a>
                </li>

            </ul>
        </li>
        @endcan
        @can("etudiant")
        <li class="nav-header">Retraits</li>
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-users"></i>
                <p>
                Dépot des demandes
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                    Suivis
                </p>
            </a>
        </li>
        @endcan
        @can("authentificateur")

        <li class="nav-header">AUTH</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-coins"></i>
                <p>
                    Authentications
                </p>
            </a>
        </li>

        @endcan
        </ul>
      </nav>
