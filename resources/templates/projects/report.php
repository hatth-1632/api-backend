<html>

<head>
    <meta name="author" content="Reconmap"/>
</head>

<body>
<div style="text-align: center;">
    <h2>Security report</h2>

    <dl>
        <dt>Version</dt>
        <dd><?= $version ?></dd>

        <dt>Date</dt>
        <dd><?= $date ?></dd>
    </dl>
    <p><em>Generated on the by <a href="https://reconmap.org">Reconmap</a>.</em></p>

    <h3>CONTENT IS CONFIDENTIAL</h3>

</div>

<div style="break-after:page"></div>

<h3><?= $project['name'] ?></h3>
<p><?= $project['description'] ?></p>

<h2>Version control</h2>

<table>
    <thead>
    <tr>
        <th>Version</th>
        <th>Date</th>
        <th>Author</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $version ?></td>
        <td><?= $date ?></td>
        <td>-</td>
        <td>-</td>
    </tr>
    </tbody>
</table>

<h2>Table of contents</h2>

<ol>
    <li><a href="#pentesting-team">Pentesting team</a></li>
    <li><a href="#targets">Targets</a></li>
    <li><a href="#findings-overview">Findings overview</a></li>
</ol>

<div style="break-after:page"></div>
<h2><a name="pentesting-team">Pentesting team</a></h2>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><strong><?= $user['name'] ?></strong></li>
    <?php endforeach ?>
</ul>

<div style="break-after:page"></div>
<h2><a name="targets">Targets</a></h2>

<ul>
    <?php foreach ($targets as $target) : ?>
        <li><strong><?= $target['name'] ?></strong> (<?= $target['kind'] ?>)</li>
    <?php endforeach ?>
</ul>

<div style="break-after:page"></div>
<h2><a name="findings-overview">Findings overview</a></h2>

<table>
    <thead>
    <tr>
        <th>Severity</th>
        <th>Count</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($findingsOverview as $findingOverview): ?>
        <tr>
            <td><?= $findingOverview['severity'] ?></td>
            <td><?= $findingOverview['count'] ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<div style="break-after:page"></div>
<h2>Vulnerabilities</h2>

<ul>
    <?php foreach ($vulnerabilities as $vuln) : ?>
        <h3><?= $vuln['summary'] ?></h3>
        <p><?= $vuln['description'] ?></p>
    <?php endforeach ?>
</ul>

</body>

</html>