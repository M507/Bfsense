
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css?v=1580510450">
	<link rel="stylesheet" href="/vendor/sortable/sortable-theme-bootstrap.css?v=1580510450">
	<link rel="stylesheet" href="/css/pfSense.css?v=1580510450" />

	<title>pfSense.localdomain - System: Package Manager: Installed Packages</title>
	<script type="text/javascript">
	//<![CDATA[
	var events = events || [];
	var newSeperator = false;
	//]]>
	</script>
<script type="text/javascript">if (top != self) {top.location.href = self.location.href;}</script><script type="text/javascript">var csrfMagicToken = "sid:f118127bb7a2979d54032e1e4782f54677992ded,1585990412";var csrfMagicName = "__csrf_magic";</script><script src="/csrf/csrf-magic.js" type="text/javascript"></script></head>

<body id="2">
<nav id="topmenu" class="navbar navbar-static-top navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#pf-navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">
				<svg id="logo" role="img" aria-labelledby="pfsense-logo" x="0px" y="0px" viewBox="0 0 282.8 84.2">
	<title id="pfsense-logo-svg">pfSense Logo</title>
	<path class="logo-st0" d="M27.8,57.7c2.9,0,5.4-0.9,7.5-2.6c2.1-1.7,3.6-4,4.4-6.8c0.8-2.8,0.6-5.1-0.5-6.8c-1.1-1.7-3.2-2.6-6.1-2.6 c-2.9,0-5.4,0.9-7.5,2.6c-2.1,1.7-3.5,4-4.3,6.8c-0.8,2.8-0.7,5.1,0.5,6.8C22.8,56.9,24.8,57.7,27.8,57.7"/>
	<path class="logo-st0" d="M115.1,46.6c-1.5-0.8-3-1.4-4.7-1.8c-1.7-0.4-3.2-0.7-4.7-1.1c-1.5-0.3-2.7-0.7-3.6-1.1c-0.9-0.4-1.4-1.1-1.4-2 c0-1.1,0.5-1.9,1.4-2.4c0.9-0.5,1.9-0.7,2.8-0.7c2.8,0,5,1,6.7,3.1l7-7c-1.7-1.8-3.9-3.1-6.4-3.8c-2.5-0.7-5-1.1-7.4-1.1 c-1.9,0-3.9,0.2-5.7,0.7c-1.9,0.5-3.6,1.2-5,2.3c-1.5,1-2.6,2.3-3.5,3.9c-0.9,1.6-1.3,3.5-1.3,5.7c0,2.3,0.5,4.2,1.4,5.6 c0.9,1.4,2.1,2.5,3.6,3.3c1.5,0.8,3,1.3,4.7,1.7c1.7,0.4,3.2,0.7,4.7,1.1c1.5,0.3,2.7,0.7,3.6,1.2c0.9,0.5,1.4,1.2,1.4,2.2 c0,1-0.5,1.7-1.6,2.1c-1.1,0.4-2.3,0.6-3.6,0.6c-1.7,0-3.3-0.3-4.6-1c-1.3-0.7-2.5-1.7-3.6-3l-7,7.7c1.8,1.9,4.1,3.2,6.7,3.9 c2.7,0.7,5.3,1.1,7.9,1.1c2,0,4-0.2,6.1-0.6c2-0.4,3.9-1,5.5-2c1.6-0.9,3-2.2,4-3.8c1-1.6,1.6-3.5,1.6-5.9c0-2.3-0.5-4.2-1.4-5.6 C117.7,48.6,116.5,47.4,115.1,46.6"/>
	<path class="logo-st0" d="M156.3,34.1c-1.5-1.7-3.3-3-5.5-3.9c-2.2-0.9-4.6-1.4-7.2-1.4c-2.9,0-5.6,0.5-8.1,1.4c-2.5,0.9-4.7,2.2-6.6,3.9 c-1.9,1.7-3.3,3.8-4.4,6.2c-1.1,2.4-1.6,5.1-1.6,8c0,3,0.5,5.6,1.6,8c1.1,2.4,2.5,4.5,4.4,6.2c1.9,1.7,4.1,3,6.6,3.9 c2.5,0.9,5.2,1.4,8.1,1.4c3,0,5.9-0.6,8.7-1.9c2.8-1.3,5.1-3.1,7-5.4l-8-5.9c-1,1.3-2.1,2.4-3.4,3.3c-1.3,0.8-2.9,1.3-4.8,1.3 c-2.2,0-4.1-0.7-5.7-2c-1.5-1.3-2.5-3.1-3-5.2H161v-3.6c0-3-0.4-5.6-1.2-8C159,37.9,157.8,35.8,156.3,34.1 M134.3,44.1 c0.1-0.9,0.3-1.8,0.7-2.6c0.4-0.8,0.9-1.6,1.6-2.2c0.7-0.6,1.5-1.2,2.5-1.6c1-0.4,2.1-0.6,3.4-0.6c2.1,0,3.8,0.7,5.1,2.1 c1.3,1.4,2,3,1.9,5H134.3z"/>
	<path class="logo-st0" d="M198.3,33.8c-1-1.6-2.4-2.8-4.2-3.7c-1.8-0.9-4.1-1.3-7-1.3c-1.4,0-2.7,0.2-3.8,0.5c-1.2,0.4-2.2,0.8-3.1,1.4 c-0.9,0.6-1.7,1.2-2.4,1.9c-0.7,0.7-1.2,1.4-1.5,2.1H176v-5.1h-11v37.2h11.5V48.4c0-1.2,0.1-2.4,0.2-3.5c0.2-1.1,0.5-2.1,1-3 c0.5-0.9,1.2-1.6,2.1-2.1c0.9-0.5,2.1-0.8,3.6-0.8c1.5,0,2.6,0.3,3.4,0.9c0.8,0.6,1.4,1.4,1.8,2.4c0.4,1,0.6,2,0.7,3.2 c0.1,1.1,0.1,2.3,0.1,3.3v18.2h11.5V46.4c0-2.5-0.2-4.8-0.5-7C199.9,37.3,199.3,35.4,198.3,33.8"/>
	<path class="logo-st0" d="M231.5,46.6c-1.5-0.8-3-1.4-4.7-1.8c-1.7-0.4-3.2-0.7-4.7-1.1c-1.5-0.3-2.7-0.7-3.6-1.1c-0.9-0.4-1.4-1.1-1.4-2 c0-1.1,0.5-1.9,1.4-2.4c0.9-0.5,1.9-0.7,2.8-0.7c2.8,0,5,1,6.7,3.1l7-7c-1.7-1.8-3.9-3.1-6.4-3.8c-2.5-0.7-5-1.1-7.4-1.1 c-1.9,0-3.9,0.2-5.7,0.7c-1.9,0.5-3.6,1.2-5,2.3c-1.5,1-2.6,2.3-3.5,3.9c-0.9,1.6-1.3,3.5-1.3,5.7c0,2.3,0.5,4.2,1.4,5.6 c0.9,1.4,2.1,2.5,3.6,3.3c1.5,0.8,3,1.3,4.7,1.7c1.7,0.4,3.2,0.7,4.7,1.1c1.5,0.3,2.7,0.7,3.6,1.2c0.9,0.5,1.4,1.2,1.4,2.2 c0,1-0.5,1.7-1.6,2.1c-1.1,0.4-2.3,0.6-3.6,0.6c-1.7,0-3.3-0.3-4.6-1c-1.3-0.7-2.5-1.7-3.6-3l-7,7.7c1.8,1.9,4.1,3.2,6.7,3.9 c2.7,0.7,5.3,1.1,7.9,1.1c2,0,4-0.2,6.1-0.6c2-0.4,3.9-1,5.5-2c1.6-0.9,3-2.2,4-3.8c1-1.6,1.6-3.5,1.6-5.9c0-2.3-0.5-4.2-1.4-5.6 C234.1,48.6,232.9,47.4,231.5,46.6"/>
	<path class="logo-st0" d="M277.4,51.9v-4.2c-0.1-2.7-0.5-5.2-1.2-7.4c-0.8-2.4-2-4.5-3.5-6.2c-1.5-1.7-3.3-3-5.5-3.9 c-2.2-0.9-4.6-1.4-7.2-1.4c-2.9,0-5.6,0.5-8.1,1.4c-2.5,0.9-4.7,2.2-6.6,3.9c-1.9,1.7-3.3,3.8-4.4,6.2c-1.1,2.4-1.6,5.1-1.6,8 c0,3,0.5,5.6,1.6,8c1.1,2.4,2.5,4.5,4.4,6.2c1.9,1.7,4.1,3,6.6,3.9c2.5,0.9,5.2,1.4,8.1,1.4c3,0,5.9-0.6,8.7-1.9 c2.8-1.3,5.1-3.1,7-5.4l-8-5.9c-1,1.3-2.1,2.4-3.4,3.3c-1.3,0.8-2.9,1.3-4.8,1.3c-2.2,0-4.1-0.7-5.7-2c-1.5-1.3-2.5-3.1-3-5.2H277.4 z M250.7,44.1c0.1-0.9,0.3-1.8,0.7-2.6c0.4-0.8,0.9-1.6,1.6-2.2c0.7-0.6,1.5-1.2,2.5-1.6c1-0.4,2.1-0.6,3.4-0.6 c2.1,0,3.8,0.7,5.1,2.1c1.3,1.4,2,3,1.9,5H250.7z"/>
	<path class="logo-st1" d="M52.6,38.9l2.6-9.2h4.6l1.8-6.6c0.6-2,1.3-4,2.2-5.8c0.8-1.8,2-3.4,3.4-4.8c1.4-1.4,3.2-2.5,5.3-3.3 c2.1-0.8,4.8-1.2,7.9-1.2c0.8,0,1.5,0,2.3,0.1c-0.7-2.9-3.3-5-6.3-5.1H11.9c-3.6,0-6.5,3-6.5,6.6V67l10.5-37.3h10.6l-1.4,4.9h0.2 c0.6-0.7,1.4-1.3,2.4-2c1-0.7,2-1.3,3.1-1.9c1.1-0.6,2.3-1,3.6-1.4c1.3-0.4,2.6-0.5,3.9-0.5c2.8,0,5.1,0.5,7.1,1.4 c2,0.9,3.5,2.3,4.7,4c1,1.5,1.6,3.3,1.9,5.4l0.8-0.6H52.6z"/>
	<path class="logo-st2" d="M82.1,17.9c-0.5-0.1-1.1-0.2-1.8-0.2c-1.8,0-3.3,0.4-4.5,1.2c-1.1,0.8-2.1,2.4-2.8,4.9l-1.7,5.9h6.5l1.6,5.1 l-4.2,4.1h-6.5l-7.9,28H49.4l7.9-28h-4.4L52,39.5c0,0.2,0.1,0.5,0.1,0.7c0.2,2.3-0.1,4.9-0.9,7.7c-0.7,2.6-1.8,5.1-3.3,7.5 c-1.5,2.4-3.2,4.5-5.1,6.3c-2,1.8-4.2,3.3-6.6,4.4c-2.4,1.1-4.9,1.6-7.6,1.6c-2.4,0-4.5-0.4-6.4-1.1c-1.9-0.7-3.2-2-4-3.8h-0.2 l-5,17.7h63.3c3.6,0,6.6-2.9,6.6-6.6V18.2C82.6,18.1,82.3,18,82.1,17.9"/>
	<path class="logo-st0" d="M277.6,68.5h0.8c0.4,0,0.6-0.1,0.7-0.2c0.1-0.1,0.2-0.2,0.2-0.4c0-0.1,0-0.2-0.1-0.3c-0.1-0.1-0.1-0.2-0.3-0.2 c-0.1,0-0.3-0.1-0.6-0.1h-0.7V68.5z M277,70.6v-3.8h1.3c0.5,0,0.8,0,1,0.1c0.2,0.1,0.4,0.2,0.5,0.4c0.1,0.2,0.2,0.4,0.2,0.6 c0,0.3-0.1,0.5-0.3,0.7c-0.2,0.2-0.5,0.3-0.8,0.3c0.1,0.1,0.2,0.1,0.3,0.2c0.2,0.2,0.3,0.4,0.6,0.8l0.5,0.7h-0.8l-0.3-0.6 c-0.3-0.5-0.5-0.8-0.6-0.9c-0.1-0.1-0.3-0.1-0.5-0.1h-0.4v1.6H277z M278.6,65.7c-0.5,0-1,0.1-1.5,0.4c-0.5,0.3-0.8,0.6-1.1,1.1 c-0.3,0.5-0.4,1-0.4,1.5c0,0.5,0.1,1,0.4,1.5c0.3,0.5,0.6,0.8,1.1,1.1c0.5,0.3,1,0.4,1.5,0.4c0.5,0,1-0.1,1.5-0.4 c0.5-0.3,0.8-0.6,1.1-1.1c0.3-0.5,0.4-1,0.4-1.5c0-0.5-0.1-1-0.4-1.5c-0.3-0.5-0.6-0.8-1.1-1.1C279.6,65.8,279.1,65.7,278.6,65.7z M278.6,65.1c0.6,0,1.2,0.2,1.8,0.5c0.6,0.3,1,0.7,1.3,1.3c0.3,0.6,0.5,1.2,0.5,1.8c0,0.6-0.2,1.2-0.5,1.8c-0.3,0.6-0.8,1-1.3,1.3 c-0.6,0.3-1.2,0.5-1.8,0.5c-0.6,0-1.2-0.2-1.8-0.5c-0.6-0.3-1-0.8-1.3-1.3c-0.3-0.6-0.5-1.2-0.5-1.8c0-0.6,0.2-1.2,0.5-1.8 c0.3-0.6,0.8-1,1.3-1.3C277.4,65.2,278,65.1,278.6,65.1z"/>
</svg>				<span style="color:white;font-size:.5em;text-transform:uppercase;letter-spacing:1px;">Community Edition</span>
			</a>
		</div>
		<div class="collapse navbar-collapse" id="pf-navbar">
			<ul class="nav navbar-nav">
							<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						System						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu"><li><a href="/system_advanced_admin.php" class="navlnk" >Advanced</a></li>
<li><a href="/system_camanager.php" class="navlnk" >Cert. Manager</a></li>
<li><a href="/system.php" class="navlnk" >General Setup</a></li>
<li><a href="/system_hasync.php" class="navlnk" >High Avail. Sync</a></li>
<li><a href="/index.php?logout" class="navlnk" usepost>Logout (admin)</a></li>
<li><a href="/pkg_mgr_installed.php" class="navlnk" >Package Manager</a></li>
<li><a href="/system_gateways.php" class="navlnk" >Routing</a></li>
<li><a href="/wizard.php?xml=setup_wizard.xml" class="navlnk" >Setup Wizard</a></li>
<li><a href="/pkg_mgr_install.php?id=firmware" class="navlnk" >Update</a></li>
<li><a href="/system_usermanager.php" class="navlnk" >User Manager</a></li>
</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Interfaces						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu"><li><a href="/interfaces_assign.php" class="navlnk" >Assignments</a></li>
 <li class="divider"></li><li><a href="/interfaces.php?if=wan" class="navlnk" >WAN</a></li>
</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Firewall						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu"><li><a href="/firewall_aliases.php" class="navlnk" >Aliases</a></li>
<li><a href="/firewall_nat.php" class="navlnk" >NAT</a></li>
<li><a href="/firewall_rules.php" class="navlnk" >Rules</a></li>
<li><a href="/firewall_schedule.php" class="navlnk" >Schedules</a></li>
<li><a href="/firewall_shaper.php" class="navlnk" >Traffic Shaper</a></li>
<li><a href="/firewall_virtual_ip.php" class="navlnk" >Virtual IPs</a></li>
</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Services						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu"><li><a href="/services_acb.php" class="navlnk" >Auto Config Backup</a></li>
<li><a href="/services_captiveportal.php" class="navlnk" >Captive Portal</a></li>
<li><a href="/services_dhcp_relay.php" class="navlnk" >DHCP Relay</a></li>
<li><a href="/services_dhcp.php" class="navlnk" >DHCP Server</a></li>
<li><a href="/services_dhcpv6_relay.php" class="navlnk" >DHCPv6 Relay</a></li>
<li><a href="/services_dhcpv6.php" class="navlnk" >DHCPv6 Server &amp; RA</a></li>
<li><a href="/services_dnsmasq.php" class="navlnk" >DNS Forwarder</a></li>
<li><a href="/services_unbound.php" class="navlnk" >DNS Resolver</a></li>
<li><a href="/services_dyndns.php" class="navlnk" >Dynamic DNS</a></li>
<li><a href="/services_igmpproxy.php" class="navlnk" >IGMP Proxy</a></li>
<li><a href="/load_balancer_pool.php" class="navlnk" >Load Balancer</a></li>
<li><a href="/services_ntpd.php" class="navlnk" >NTP</a></li>
<li><a href="/services_pppoe.php" class="navlnk" >PPPoE Server</a></li>
<li><a href="/services_snmp.php" class="navlnk" >SNMP</a></li>
<li><a href="/services_wol.php" class="navlnk" >Wake-on-LAN</a></li>
</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						VPN						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu"><li><a href="/vpn_ipsec.php" class="navlnk" >IPsec</a></li>
<li><a href="/vpn_l2tp.php" class="navlnk" >L2TP</a></li>
<li><a href="/vpn_openvpn_server.php" class="navlnk" >OpenVPN</a></li>
</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Status						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu"><li><a href="/status_captiveportal.php" class="navlnk" >Captive Portal</a></li>
<li><a href="/status_carp.php" class="navlnk" >CARP (failover)</a></li>
<li><a href="/index.php" class="navlnk" >Dashboard</a></li>
<li><a href="/status_dhcp_leases.php" class="navlnk" >DHCP Leases</a></li>
<li><a href="/status_dhcpv6_leases.php" class="navlnk" >DHCPv6 Leases</a></li>
<li><a href="/status_unbound.php" class="navlnk" >DNS Resolver</a></li>
<li><a href="/status_filter_reload.php?user=true" class="navlnk" >Filter Reload</a></li>
<li><a href="/status_gateways.php" class="navlnk" >Gateways</a></li>
<li><a href="/status_interfaces.php" class="navlnk" >Interfaces</a></li>
<li><a href="/status_ipsec.php" class="navlnk" >IPsec</a></li>
<li><a href="/status_lb_pool.php" class="navlnk" >Load Balancer</a></li>
<li><a href="/status_monitoring.php" class="navlnk" >Monitoring</a></li>
<li><a href="/status_ntpd.php" class="navlnk" >NTP</a></li>
<li><a href="/status_openvpn.php" class="navlnk" >OpenVPN</a></li>
<li><a href="/status_pkglogs.php" class="navlnk" >Package Logs</a></li>
<li><a href="/status_queues.php" class="navlnk" >Queues</a></li>
<li><a href="/status_services.php" class="navlnk" >Services</a></li>
<li><a href="/status_logs.php" class="navlnk" >System Logs</a></li>
<li><a href="/status_graph.php" class="navlnk" >Traffic Graph</a></li>
</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Diagnostics						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu"><li><a href="/diag_arp.php" class="navlnk" >ARP Table</a></li>
<li><a href="/diag_authentication.php" class="navlnk" >Authentication</a></li>
<li><a href="/diag_backup.php" class="navlnk" >Backup &amp; Restore</a></li>
<li><a href="/diag_command.php" class="navlnk" >Command Prompt</a></li>
<li><a href="/diag_dns.php" class="navlnk" >DNS Lookup</a></li>
<li><a href="/diag_edit.php" class="navlnk" >Edit File</a></li>
<li><a href="/diag_defaults.php" class="navlnk" >Factory Defaults</a></li>
<li><a href="/diag_halt.php" class="navlnk" >Halt System</a></li>
<li><a href="/diag_limiter_info.php" class="navlnk" >Limiter Info</a></li>
<li><a href="/diag_ndp.php" class="navlnk" >NDP Table</a></li>
<li><a href="/diag_packet_capture.php" class="navlnk" >Packet Capture</a></li>
<li><a href="/diag_pf_info.php" class="navlnk" >pfInfo</a></li>
<li><a href="/diag_pftop.php" class="navlnk" >pfTop</a></li>
<li><a href="/diag_ping.php" class="navlnk" >Ping</a></li>
<li><a href="/diag_reboot.php" class="navlnk" >Reboot</a></li>
<li><a href="/diag_routes.php" class="navlnk" >Routes</a></li>
<li><a href="/diag_smart.php" class="navlnk" >S.M.A.R.T. Status</a></li>
<li><a href="/diag_sockets.php" class="navlnk" >Sockets</a></li>
<li><a href="/diag_dump_states.php" class="navlnk" >States</a></li>
<li><a href="/diag_states_summary.php" class="navlnk" >States Summary</a></li>
<li><a href="/diag_system_activity.php" class="navlnk" >System Activity</a></li>
<li><a href="/diag_tables.php" class="navlnk" >Tables</a></li>
<li><a href="/diag_testport.php" class="navlnk" >Test Port</a></li>
<li><a href="/diag_traceroute.php" class="navlnk" >Traceroute</a></li>
</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Help						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu"><li><a href="/help.php?page=pkg_mgr_installed.php" target="_blank" class="navlnk" >About this Page</a></li>
<li><a href="https://redirects.netgate.com/issues" target="_blank" class="navlnk" >Bug Database</a></li>
<li><a href="https://redirects.netgate.com/docs" target="_blank" class="navlnk" >Documentation</a></li>
<li><a href="https://redirects.netgate.com/fbsdhandbook" target="_blank" class="navlnk" >FreeBSD Handbook</a></li>
<li><a href="https://redirects.netgate.com/support" target="_blank" class="navlnk" >Paid Support</a></li>
<li><a href="https://redirects.netgate.com/book" target="_blank" class="navlnk" >pfSense Book</a></li>
<li><a href="https://redirects.netgate.com/forum" target="_blank" class="navlnk" >User Forum</a></li>
<li><a href="https://redirects.netgate.com/survey_1" target="_blank" class="navlnk" >User survey</a></li>
</ul>
				</li>

			</ul>
			<ul class="nav navbar-nav navbar-right">
									<li class="dropdown">
						<a href="/index.php?logout" usepost>
							<i class="fa fa-sign-out" title="Logout (admin@pfSense.localdomain)"></i>
						</a>
					</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container static" >


	<header class="header">

<ol class="breadcrumb"><li>System</li><li><a href="/pkg_mgr_installed.php">Package Manager</a></li><li><a href="/pkg_mgr_installed.php">Installed Packages</a></li></ol>		<ul class="context-links">







			<li>
			<a href="/help.php?page=pkg_mgr_installed.php" target="_blank" title="Help for items on this page">
				<i class="fa fa-question-circle"></i>
			</a>
		</li>
			</ul>
	</header>
<ul class="nav nav-pills"><li role="presentation" class="active"><a href="pkg_mgr_installed.php" >Installed Packages</a></li><li role="presentation"><a href="pkg_mgr.php" >Available Packages</a></li></ul>
<div class="panel panel-default">
	<div class="panel-heading"><h2 class="panel-title">Installed Packages</h2></div>
	<div id="pkgtbl" class="panel-body">
		<div id="waitmsg">
			<div class="alert alert-warning clearfix" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="pull-left">Please wait while the list of packages is retrieved and formatted.&nbsp;<i class="fa fa-cog fa-spin"></i></div></div>		</div>

		<div id="errmsg" style="display: none;">
			<div class="alert alert-danger clearfix" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="pull-left"><ul><li>Unable to retrieve package information.</li></ul></div></div>		</div>

		<div id="nopkg" style="display: none;">
			<div class="alert alert-warning clearfix" role="alert"><div class="pull-left">There are no packages currently installed.</div></div>		</div>
	</div>

	<div id="legend" class="alert-info text-center">
		<p>
		<i class="fa fa-refresh"></i> = Update  &nbsp;
		<i class="fa fa-check"></i> = Current &nbsp;
		</p>
		<p>
		<i class="fa fa-trash"></i> = Remove &nbsp;
		<i class="fa fa-info"></i> = Information &nbsp;
		<i class="fa fa-retweet"></i> = Reinstall		</p>
		<p>
		<span class="text-warning">Newer version available</span>
		</p>
		<span class="text-danger">Package is configured but not (fully) installed or deprecated</span>
	</div>
</div>

<script type="text/javascript">
//<![CDATA[

events.push(function() {

	// Retrieve the table formatted package information and display it in the "Packages" panel
	// (Or display an appropriate error message)
	var ajaxRequest;

	$('#legend').hide();
	$('#nopkg').hide();

	$.ajax({
		url: "/pkg_mgr_installed.php",
		type: "post",
		data: { ajax: "ajax"},
		success: function(data) {
			if (data == "error") {
				$('#waitmsg').hide();
				$('#errmsg').show();
			} else if (data == "nopkg") {
				$('#waitmsg').hide();
				$('#nopkg').show();
				$('#errmsg').hide();
			} else {
				$('#pkgtbl').html(data);
				$('#legend').show();
			}
		},
		error: function() {
			$('#waitmsg').hide();
			$('#errmsg').show();
		}
	});

});
//]]>
</script>

	</div>
	<footer class="footer">
		<div class="container">
			<p class="text-muted">
				<a id="tpl" style="display: none;" href="#" title="Top of page"><i class="fa fa-caret-square-o-up pull-left"></i></a>
				<a target="_blank" href="https://pfsense.org">pfSense</a> is developed and maintained by <a target="_blank" href="https://netgate.com">Netgate. </a> &copy; ESF 2004 - 2020<a target="_blank" href="https://pfsense.org/license"> View license.</a>				<a id="tpr" style="display: none;" href="#" title="Top of page"><i class="fa fa-caret-square-o-up pull-right"></i></a>
			</p>
		</div>
	</footer>

	<!-- This use of filemtime() is intended to fool the browser into reloading the file (not using the cached version) if the file is changed -->

	<script src="/vendor/jquery/jquery-3.4.1.min.js?v=1580510450"></script>
 	<script src="/vendor/jquery-ui/jquery-ui-1.12.1.min.js?v=1580510450"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js?v=1580510450"></script>
	<script src="/js/pfSense.js?v=1580510450"></script>
	<script src="/js/pfSenseHelpers.js?v=1580510450"></script>
	<script src="/js/polyfills.js?v=1580510450"></script>
	<script src="/vendor/sortable/sortable.js?v=1580510450"></script>

	<script type="text/javascript">
	//<![CDATA[
		// Un-hide the "Top of page" icons if the page is larger than the window
		if ($(document).height() > $(window).height()) {
		    $('[id^=tp]').show();
		}
	//]]>
	</script>
<script type="text/javascript">CsrfMagic.end();</script></body>
</html>
