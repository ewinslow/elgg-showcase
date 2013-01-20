/* <style> /**/
.elgg-showcase-item {
    display: block;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.elgg-showcase-item img {
	max-width: 100%;
	height: auto;
}

.elgg-showcase-title {
    padding: 0;
}

.elgg-showcase-title > a:hover {
	color: inherit;
}

.elgg-showcase-info {
    background: #333;
    background: rgba(0, 0, 0, .85);
    box-sizing: border-box;
    color: white;
    height: 100%;
    left: 0;
    padding: 1em;
    position: absolute;
    right: 0;
    top: 100%;
    transition: top .3s ease 0;
    vertical-align: middle;
}

.elgg-showcase-item:hover .elgg-showcase-info {
    top: 0;
}
