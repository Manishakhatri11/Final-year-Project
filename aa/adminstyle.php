<style>
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
  }
  
  .container {
    display: flex;
  }
  
  .sidebar {
    background-color: #333333;
    color: #ffffff;
    width: 250px;
    padding: 20px;
  }
  
  .logo h1 {
    color: #ffffff;
    margin: 0;
    font-size: 24px;
  }
  
  .menu {
    list-style-type: none;
    padding: 0;
    margin-top: 40px;
  }
  
  .menu li {
    margin-bottom: 10px;
  }
  
  .menu a {
    color: #ffffff;
    text-decoration: none;
    display: flex;
    align-items: center;
  }
  
  .menu a:hover {
    color: #eaeaea;
  }
  
  .menu a.active {
    color: #ffd700;
  }
  
  .content {
    flex-grow: 1;
    padding: 40px;
    background-color: #ffffff;
  }
  
  .content h.content h2 {
    color: #333333;
    margin-bottom: 20px;
  }
  
  .dashboard-stats {
    display: flex;
    justify-content: space-between;
  }
  
  .stat-card {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
    flex-basis: 30%;
  }
  
  .stat-icon {
    font-size: 40px;
    margin-bottom: 10px;
  }
  
  .stat-info {
    text-align: center;
  }
  
  .stat-info h3 {
    margin: 0;
    font-size: 18px;
  }
  
  .stat-info p {
    margin: 0;
    font-size: 24px;
    font-weight: bold;
  }
  </style>