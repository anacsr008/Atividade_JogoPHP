\<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicie o Combate</title>
    <link rel="stylesheet" href="/css/combate.css">
</head>
<body>
        <div class="combat-screen">
            
            <div class="combat-status">
                
                <div class="combatant hero">
                    <h3>Gandalf (Herói)</h3>
                    <div class="health-bar">
                        <div class="health-fill" style="width: 85%;"></div>
                    </div>
                    <p>Vida: <span id="hero-hp">170</span>/200</p>
                    <p>Arma: Lâmina do Tridente</p>
                </div>
    
                <div class="vs-label">VS</div>
    
                <div class="combatant monster">
                    <h3>Kraken</h3>
                    <div class="health-bar monster-hp">
                        <div class="health-fill" style="width: 70%;"></div>
                    </div>
                    <p>Vida: <span id="monster-hp">210</span>/300</p>
                    <p>Força: 20</p>
                </div>
            </div>
    
            <div class="battle-log">
                <h4>Registro de Batalha</h4>
                <div class="log-messages" id="log-messages">
                    <p class="log-turn">[Turno 1]</p>
                    <p class="log-action action-hero">Gandalf ataca! Causa 45 de dano.</p>
                    <p class="log-action action-monster">O Kraken revida com seus tentáculos!</p>
                    <p class="log-system">O Kraken libera uma nuvem de tinta escura. (Desvantagem no ataque)</p>
                </div>
            </div>
    
            <div class="action-panel">
                <h4>Seu Turno</h4>
                <div class="action-buttons">
                    <button class="action-btn attack-btn">🔪 Atacar</button>
                    <button class="action-btn item-btn">🧪 Usar Item</button>
                    <button class="action-btn skill-btn">✨ Habilidade</button>
                    <button class="action-btn defend-btn">🛡️ Defender</button>
                </div>
            </div>
        </div>

</body>
</html>