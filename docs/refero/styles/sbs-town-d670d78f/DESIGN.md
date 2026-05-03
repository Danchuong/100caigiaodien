# SBS Town — Refero Style

- Refero URL: https://styles.refero.design/style/d670d78f-4542-4a66-b886-fc32361b8562
- Site URL: https://open-sbs.brig.ht/city
- ID: d670d78f-4542-4a66-b886-fc32361b8562
- Theme: dark
- Industry: other
- Created: 2026-04-30T02:12:17.395Z
- Ranks: newest: 421, popular: 655, trending: 449

> Neon Cyberpunk Metropolis

## Description

SBS Town immerses users in a dark, neon-lit digital cityscape. The visual style is characterized by a luminous, futuristic aesthetic where dark surfaces are punctuated by vibrant, glowing accents. Typography is compact and precise, appearing as labels or annotations within the immersive 3D environment. The interface itself is minimal, primarily leveraging the interactive 3D scene, with UI elements serving as functional overlays rather than dominant structural components.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Void | #111111 | neutral | Deep background for immersive scenes, subtle borders, and secondary text elements |
| Ghost Marble | #ffffff | neutral | Prominent text, icon fills, and accent borders that stand out against dark environments |
| Cyber Glow Pink | #ff00d9 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |
| Aqua Beam | #00f0ff | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |
| Voltage Yellow | #fafa00 | accent | Bright secondary accent, drawing attention to specific points of interest or data within the futuristic map |
| Infrared Red | #f0445d | accent | Complementary accent color, used for tags that need to create a sense of urgency or distinct classification |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Circular | system-ui | 400 | 16px | 1.15 | Primary UI text for labels, annotations, and interactive elements. Its consistent weight maintains a clear, unobtrusive presence within the visual-heavy interface. |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "100px",
    "buttons": "100px",
    "overlays": "100px"
  },
  "elementGap": "5px",
  "sectionGap": "43px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Kickoff Tag Button

**Role:** Primary interactive element within the 3D map

A pill-shaped button with a 'Warning Amber' background (#ff7c24), white text (#ffffff) set in Circular 400 at 16px, and a 100px border-radius, providing a soft, accessible touch target. Features 5px vertical and 20px horizontal padding.

### Label Tag

**Role:** Informational labels within the 3D map

Pill-shaped label, like 'Revolutionary' or 'Financing', with an 'Infrared Red' (#f0445d) or 'Warning Amber' (#ff7c24) background, white text (#ffffff) set in Circular 400 at 16px, and a 100px border-radius. Padding is 5px vertical and 20px horizontal.

### Map Overlay Icon

**Role:** Actionable icons for navigation and information

Small, outlined icons with 'Ghost Marble' (#ffffff) color against the dark immersive background. Accompanied by 16px Circular 400 'Ghost Marble' text, positioned minimally.

## Do's

- Prioritize 'Midnight Void' (#111111) for all core background and surface elements to establish the dark theme.
- Use 'Ghost Marble' (#ffffff) for primary text and iconic elements to ensure legibility against dark backgrounds.
- Apply 'Cyber Glow Pink' and 'Aqua Beam' as primary accent colors for interactive states and decorative lighting within the 3D environment.
- Render all interactive buttons and labels as pill-shaped elements using a 100px border-radius.
- Maintain a clear visual hierarchy by using the Circular 400 font at 16px for all interface text.
- Leverage the 'Warning Amber' (#ff7c24) and 'Infrared Red' (#f0445d) for semantic tags and call-outs within the immersive city map.
- Employ 5px/20px padding (vertical/horizontal) for all small interactive elements like tags and buttons.

## Don'ts

- Avoid using saturated background colors; all large surface areas should remain deep, dark neutrals to preserve the immersive cyberpunk aesthetic.
- Do not introduce heavy shadows or strong elevation effects, as the visual style relies on glowing accents rather than traditional depth.
- Do not deviate from the Circular font family or its 16px, 400 weight for UI text; consistency is key for legibility in this environment.
- Do not use subtle border radii; all rounded elements must commit to the 100px value for a distinct pill shape.
- Avoid generic, non-glowing accent colors; all accent colors must have a luminous, high-contrast quality.
- Do not use large, blocky UI components; maintain a lightweight, ethereal presence for interface elements.
- Avoid dense text blocks; all text should be concise, functional, and integrated as labels or annotations.

## Layout

The page employs a full-bleed layout, where the primary visual is a dynamic 3D rendered cityscape that fills the entire viewport. There is no traditional page width constraint. The hero pattern is the immersive 3D scene itself. Content is arranged as minimal, floating UI overlays and tags (like 'Kickoff' or 'Revolutionary') directly integrated into the 3D environment, strategically placed to highlight points of interest. Navigation elements, such as the 'Map' icon or 'Show me around' button, are subtly positioned in the corners, maintaining a high level of visual breathing room for the central 3D experience. There are no clear sections or grids in a traditional sense, rather an interactive map with annotated features.

## Imagery

The site primarily uses 3D renders of a futuristic cityscape, imbued with a distinct cyberpunk aesthetic. The imagery is highly dimensional, depicting detailed buildings, glowing pathways, and abstract geometric icons (like the 'SBS' logo and colored cubes) that serve as key points of interest. Lighting is dark and moody, with prominent neon accents in 'Aqua Beam', 'Cyber Glow Pink', and 'Voltage Yellow' that define outlines and interactive elements. Imagery is central to the experience; the UI overlays are minimal, acting as functional annotations within the full-bleed, immersive 3D scene. Icons are simple, filled shapes that maintain the glow-in-the-dark visual language.

## Similar Brands

| Business | Why |
| --- | --- |
| Cyberpunk 2077 (game UI) | Dominant dark theme, neon accents, futuristic 3D cityscapes, and minimal overlay UI. |
| TRON: Legacy (visuals) | High contrast between dark environments and glowing, often blue and pink, linear elements and outlines. |
| Brave Browser | Uses a dark, technical aesthetic with bright, distinct accent colors for key actions and branding. |
| Linear | Employs a precise, compact typography style and favors dark backgrounds with focused pops of color for interaction. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #111111
border: #111111
accent: #00f0ff
primary action: no distinct CTA color

Example Component Prompts:
Create a 'Kickoff' tag button: background #ff7c24, text #ffffff, font Circular 400 at 16px, radius 100px, padding 5px 20px.
Create a 'Financing' informational tag: background #f0445d, text #ffffff, font Circular 400 at 16px, radius 100px, padding 5px 20px.
Create a 'Map' icon with label: icon color #ffffff, text #ffffff, font Circular 400 at 16px, no background, minimal spacing.


## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515119267-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515119267-thumb.jpg |
