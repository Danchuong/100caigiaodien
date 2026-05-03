# Spotify — Refero Style

- Refero URL: https://styles.refero.design/style/cc59e195-fed0-4928-96d1-303752786073
- Site URL: https://www.spotify.com
- ID: cc59e195-fed0-4928-96d1-303752786073
- Theme: dark
- Industry: media
- Created: 2026-04-29T00:46:03.114Z
- Ranks: newest: 886, popular: 1317, trending: 1314

> Ebony Canvas, Spotlight Content

## Description

This design system conjures a dark, immersive command center for digital media consumption. A deep ebony canvas creates a sense of gravitas, while subtle tonal variations in surfaces define hierarchical layers without relying on heavy shadows. Carefully chosen muted and vivid chromatic accents punctuate content, drawing attention to media rather than interface chrome. Rounded corners for interactive elements provide a soft contrast to the otherwise sharp, precise lines of the content blocks. Typography prioritizing readability and clear information hierarchy completes a focused and understated aesthetic.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ebony Canvas | #000000 | neutral | Page background, primary canvas, base level surface. |
| Iron Accent | #121212 | neutral | Secondary surface background, card backgrounds, sidebar background — slightly elevated from the canvas. |
| Charcoal Surface | #1f1f1f | neutral | Content container backgrounds, active navigation indicators. This is the primary filled button background. |
| Graphite Text | #b3b3b3 | neutral | Primary body text, neutral icons, subtly present borders. |
| Pure White Text | #ffffff | neutral | High-contrast text, prominent headers, interactive element text, button text, and main section titles to ensure legibility against dark backgrounds. Also used for borders on ghost buttons and input fields. |
| Muted Grey | #767676 | neutral | Placeholder text in search inputs, secondary descriptive text, subtle borders. |
| Spotify Green | #1ed760 | brand | Observed in body backgroundColor. |
| Signal Purple | #6f74a4 | accent | Background for promotional banners, drawing attention with moderate saturation. |
| Deep Space Blue | #1078a8 | accent | Diverse album/artist card backgrounds, providing subtle thematic variation. |
| Sunset Red | #dc392b | accent | Diverse album/artist card backgrounds, providing subtle thematic variation. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| SpotifyMixUI | Inter | 400, 600, 700 | 11px, 12px, 13px, 14px, 16px | 1.20, 1.33, 1.50 | Primary text font for body content, labels, captions, and interactive elements. Its multiple weights support hierarchical distinctions without changing typefaces. |
| SpotifyMixUITitle | Montserrat | 700 | 24px | 1.20 | Dedicated font for prominent headings, ensuring clear hierarchy and brand distinction at larger sizes. Its single bold weight delivers impact. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.33 |  |
| body-sm | 12 | 1.33 |  |
| body | 13 | 1.33 |  |
| body-lg | 14 | 1.33 |  |
| heading-sm | 16 | 1.33 |  |

## Spacing & Shape

```json
{
  "radius": {
    "input": "500px",
    "buttons": "9999px",
    "default": "6px",
    "circular": "50%"
  },
  "elementGap": "12px",
  "sectionGap": "48px",
  "cardPadding": "12px",
  "pageMaxWidth": "1085px"
}
```

## Components

### Filled Button

**Role:** Primary action

Background: Charcoal Surface (#1f1f1f), Text: Pure White Text (#ffffff), Padding: 12px vertical, 12px horizontal. Border radius: 9999px. Used for main calls to action.

### Ghost Button

**Role:** Secondary action

Background: transparent (rgba(0,0,0,0)), Text: Graphite Text (#b3b3b3), Border: 1px solid Graphite Text (#b3b3b3), Padding: 12px all around. Border radius: 9999px.

### High-Visibility Ghost Button

**Role:** Prominent secondary action

Background: transparent (rgba(0,0,0,0)), Text: Pure White Text (#ffffff), Border: 1px solid Pure White Text (#ffffff), Padding: 0px. Used for emphasized secondary actions like 'Install App'.

### Media Content Card

**Role:** Content display

Background: transparent (rgba(0,0,0,0)), Border radius: 6px, Padding: 12px all around. Used for individual album covers, playlists, or artist profiles.

### Container Card

**Role:** Grouped content

Background: Iron Accent (#121212), Border radius: 6px, Padding: 0px (internal elements manage their own spacing). Used to group related content, like playlist creation prompts.

### Search Input (Header)

**Role:** Global input field

Background: Charcoal Surface (#1f1f1f), Text: Pure White Text (#ffffff), Placeholder text: Muted Grey (#767676), Padding: 12px vertical, 48px left, 96px right. Border radius: 500px.

### Promotional Banner

**Role:** System message banner

Background: linear-gradient(90deg, rgb(175, 40, 150), rgb(80, 155, 245)), Text: Pure White Text (#ffffff), Padding: 12px vertical, 24px horizontal. Border radius: 0px.

### Side Navigation Container

**Role:** Persistent navigation

Background: Ebony Canvas (#000000), internal elements often use Iron Accent (#121212) as background, with no overall container padding.

## Do's

- Prioritize Ebony Canvas (#000000) for large background areas and Iron Accent (#121212) for content surfaces to establish depth.
- Use Pure White Text (#ffffff) for all main headings and prominent interactive text to ensure optimal contrast.
- Apply Iron Accent (#121212) for elevated card backgrounds and Charcoal Surface (#1f1f1f) for interactive fills like button backgrounds or active states.
- Accurately use Spotify Green (#1ed760) only for active indicators and brand highlights, like the Spotify logo or play controls.
- Employ 9999px radius for all interactive buttons and pill-shaped elements to maintain a consistent interactive affordance.
- Adhere to the 6px border radius for content cards and containers to create a soft, contained visual.
- Apply 12px vertical and horizontal padding consistently to interactive buttons and card content areas.

## Don'ts

- Do not use saturated colors from media content cards (e.g., #c80808, #508162) for UI elements; they are reserved for mood setting within content.
- Avoid using excessive box-shadows; rely on surface color changes from Ebony Canvas to Iron Accent to Charcoal Surface for visual hierarchy.
- Do not break the 9999px radius for buttons, as it is a core identifier of interactive elements.
- Restrict Pure White Text (#ffffff) usage to prominent text where high contrast is essential, otherwise use Graphite Text (#b3b3b3) for secondary content.
- Do not introduce new color gradients; adhere only to the Signal Purple gradient for specific promotional banners.
- Avoid using a page-level padding; content should align to the defined max-width of 1085px centrally.
- Do not introduce custom font styles or weights outside of SpotifyMixUI and SpotifyMixUITitle. Maintain 'normal' letter spacing for all text.

## Layout

The page structure is largely contained within a max-width of 1085px, featuring a persistent left sidebar navigation and a sticky top header. The main content area uses a flexible grid system, alternating between single-column stacks for 'Your Library' prompts and multi-column grids for content like 'Trending songs' and 'Popular artists'. Sections have consistent vertical spacing. The overall density is compact, maximizing content visibility without feeling cramped. The hero section is integrated within the main content area, not a distinct full-bleed element, with primary content appearing immediately within the defined max-width block.

## Imagery

This design primarily uses media album art and artist photography as its visual content. Album covers are presented within contained, square cards with a 6px border-radius, while artist portraits are typically circular. Both styles are rendered as content, not integrated into the UI. Photography of artists tends to be product-focused, showcasing the artist directly. Icons are minimal, monochromatic, and outlined, primarily serving functional navigation and interaction. The system is text-dominant, with imagery acting as visual anchors and content preview rather than decorative elements, creating a focused, content-first experience.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(0, 0, 0, 0.5) 0px 8px 24px 0px |
| Header/Sidebar Overlay | rgb(18, 18, 18) 0px 1px 0px 0px, rgb(124, 124, 124) 0px 0px 0px 1px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Netflix | Dark UI with vibrant media thumbnails and prominent white text for titles, creating a content-forward experience. |
| Apple Music | Focus on content cards, subtle dark backgrounds, and white typography for clarity, often using gradients within album art. |
| Tidal | Heavy reliance on dark backgrounds with high-contrast text and interactive elements, prioritizing media visuals. |
| Twitch | Dark interface, clear content blocks, and limited brand accent colors (purple for Twitch), ensuring content is the focal point. |
| YouTube (Dark Mode) | Deep gray backgrounds, white text for readability, and clear delineation of video content blocks. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #b3b3b3
background: #000000
border: #b3b3b3
accent: #1ed760
primary action: #1f1f1f (filled action)

Example Component Prompts:
Create a primary action button: Background Charcoal Surface (#1f1f1f), text Pure White Text (#ffffff), 9999px radius, 12px vertical and horizontal padding.
Create a content card a la 'Trending Songs': Background transparent, 6px radius. Text Pure White Text (#ffffff) for titles, Graphite Text (#b3b3b3) for subtitles. Image is full-bleed within the card's 6px radius.
Generate a header search input: Background Charcoal Surface (#1f1f1f), placeholder text Muted Grey (#767676), Pure White Text (#ffffff) for input, 500px radius, 12px vertical, 48px left, 96px right padding.
Create a ghost button for secondary actions: Background transparent, text Graphite Text (#b3b3b3), 1px solid Graphite Text (#b3b3b3) border, 9999px radius, 12px all around padding.
Develop a promotional banner at the bottom of the page: Background Signal Purple gradient, text Pure White Text (#ffffff), 12px vertical, 24px horizontal padding, 0px radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777423538343-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777423538343-thumb.jpg |
