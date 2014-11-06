<div style="margin-top: 8%;"></div>
<div id="content">
    <div id="sidebar">
        <div id="login" class="boxed">
            <h2 class="title">Iniciar Sesión</h2>
            <div class="content">
                <?php echo $this->Session->flash('auth'); ?>
                <?php echo $this->Form->create('User'); ?>
                <fieldset>
                    <legend>Iniciar Sesión</legend>
                    <table> 

                        <tr><td><?php echo $this->Form->input('username', array('label' => 'Nombre Usuario:', 'div' => false)); ?></td></tr>
                        <tr><td><?php echo $this->Form->input('password', array('label' => 'Contraseña:', 'div' => false, 'between' => '<br>')); ?></td></tr>
                        <tr><td><?php echo $this->Form->end(__('Entrar')); ?></td></tr>

                    </table>
                    <p><a href="#">¿Has olvidado la Conraseña?</a></p>

                </fieldset>
            </div>
        </div>
        <?php echo $this->element('updates') ?>
    </div>
    <div id="main">

        <div id="welcome" class="post">
                    
        <div id="logo">
            <h1><a href="#">Mundo Centro Burbujas</a></h1>
            <h2><a href="#">Cariari,Pococí</a></h2>

        </div>
            <div class="story">
                <p><strong>Resaltado</strong> Mensaje Normal como mision o vision</p>
            </div>
        </div>
        <div id="example" class="post">
            <h2 class="title">Misión</h2>
            <div class="story">
                <p>Contenido</p>
                <blockquote>
                    <p>&ldquo;Cita&rdquo;</p>
                </blockquote>
                <h3>Subtema</h3>
                <p>Contenido.</p>
                <p>Lista:</p>
                <ol>
                    <li>Elementos</li>
                    <li>Elementos</li>
                    <li>Elementos</li>
                </ol>
            </div>
        </div>
        <div id="example" class="post">
            <h2 class="title">Visión</h2>
            <div class="story">
                <p>Contenido</p>
                <blockquote>
                    <p>&ldquo;Cita&rdquo;</p>
                </blockquote>
                <h3>Subtema</h3>
                <p>Contenido.</p>
                <p>Lista:</p>
                <ol>
                    <li>Elementos</li>
                    <li>Elementos</li>
                    <li>Elementos</li>
                </ol>
            </div>
        </div>
    </div>
</div>


