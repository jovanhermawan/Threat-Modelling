class Headerrc extends HTMLElement {
    constructor() {
      super();
    }
  
    connectedCallback() {
      this.innerHTML = `
        <style>
          nav {
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color:  #0a0a23;
            position: fixed;
            top: 0;
            width: 100%;
          }
  
          ul {
            padding: 0;
          }
          
          a {
            font-weight: 700;
            margin: 0 25px;
            color: #fff;
            text-decoration: none;
          }
          
          a:hover {
            padding-bottom: 5px;
            box-shadow: inset 0 -2px 0 0 #fff;
          }
        </style>
        <header>
          <nav>


              <a href="logout.php">Logout</a>

              <div> <a href="#rsD"> Risk Scenario Database</a></div>
              <button onclick="showHide('rt')" >Show/Hide</button>
              <div><a href="#projectDb">Project Database</a></div>
              <button onclick="showHide('ptable')" >Show/Hide</button>
              <div><a href="#prst">Project-Risk Scenario Table</a></div>
              <button onclick="showHide('prt')" >Show/Hide</button>
              <div><a href="#da">Data Analytics</a></div>
              <button onclick="showHide('columnchart_values'); ShowHide('piechart')" >Show/Hide</button>

          </nav>
        </header>
      `;
    }
  }
  
  customElements.define('headerrc-component', Headerrc);