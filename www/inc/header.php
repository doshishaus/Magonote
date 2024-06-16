<header>


    <details class="magorun base">
        <summary class="topMagorun">
            <h3>ベースマゴルン</h3>
            <p class="point" id="baseMagorun">500マゴルン</p>
            <p>☑︎</p>
        </summary>
        <div class="Accordionlist" id="base">
            <div class="checkbox">
                <input type="checkbox" id="meal">
                <label for="meal">ごはんをたべた</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="workout">
                <label for="workout">10ふんうんどうした</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="communication">
                <label for="communication">ともだちとはなした</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="tooth">
                <label for="tooth">はみがきをした</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="sleep">
                <label for="sleep">よふかしをしなかった</label>
            </div>
            <button onclick="BaseMagorunAdd()">きょうはここまで！</button>
            <div class="sum">
                <p>
                    ベースマゴルン
                    <span id="result"></span>
                    もらえた！
                </p>
            </div>
        </div>
    </details>
    <details class="magorun active">
    <summary class="topMagorun">
            <h3>アクティブマゴルン</h3>
            <p class="point" id="activeMagorun">1000マゴルン</p>
            <p>☑︎</p>
        </summary>
        <div class="Accordionlist" id="active">
            <div class="checkbox">
                <input type="checkbox" id="meal">
                <label for="meal">ごはんをたべた</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="workout">
                <label for="workout">10ふんうんどうした</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="communication">
                <label for="communication">ともだちとはなした</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="tooth">
                <label for="tooth">はみがきをした</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="sleep">
                <label for="sleep">よふかしをしなかった</label>
            </div>
            <button onclick="ActiveMagorunAdd()">きょうはここまで！</button>
            <div class="sum">
                <p>
                    ベースマゴルン
                    <span id="result"></span>
                    もらえた！
                </p>
            </div>
        </div>
</header>