# Chantlings — Refero Style

- Refero URL: https://styles.refero.design/style/5090ce54-9097-4d29-a741-2847dbacc419
- Site URL: https://www.iorama.studio/chantlings
- ID: 5090ce54-9097-4d29-a741-2847dbacc419
- Theme: dark
- Industry: other
- Created: 2026-04-30T01:51:59.215Z
- Ranks: newest: 503, popular: 978, trending: 927

> Moonlit Forest Floor: glowing forms in the deep dark

## Description

Chantlings uses a nocturnal, atmospheric design language, evoking a digital instrument in a dark, quiet room. The canvas is deep black, allowing subtle gradients and glowing elements to emerge. Typography is highly refined, with an elegant serif for headlines that whispers rather than shouts. Interactive elements are minimal, often ghosted, with one vivid orange accent color for fills, giving a sense of warmth and focused interactivity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Noir | #000000 | neutral | Page background, primary surface for most elements — creates a deep, infinite canvas |
| Ghostly Gray | #333333 | neutral | Muted text, inactive borders, general UI elements and ghost button text |
| Canvas White | #ffffff | neutral | Primary text color, background for outlined buttons, secondary borders — creates sharp contrast against the dark canvas |
| Shadow Tint | #222222 | neutral | Subtle borders and muted accents, lighter than Ghostly Gray |
| Active Fire | #ff8800 | brand | Filled action buttons, interactive elements — a warm, vivid orange that provides a focused point of interaction |
| Subtle Glow | #ffaa20 | accent | Outlined action borders, decorative link accents — a slightly softer orange, suggesting a secondary interactive state or highlight |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Mija webfont | Lora, Playfair Display | 100, 300 | 14px, 20px, 24px, 25px, 32px | 0.80, 0.83, 1.00, 1.06, 1.33, 1.42, 1.43, 1.50 | All text: headlines use weight 300 for a distinguished, unassertive presence; body text and links are also from this family to maintain a consistent, refined voice. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.43 | 0 |
| body | 20 | 1.42 | 0 |
| subheading | 24 | 1.06 | 0 |
| display | 32 | 0.8 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "50px",
    "default": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "100px",
  "cardPadding": "18px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button

**Role:** Header navigation, secondary actions

Transparent background, Ghostly Gray (#333333) text and 1px border, 0px border radius, 18px padding for a minimalist, integrated look. Font is Mija, weight is not explicitly stated but inherits body style.

### Primary Action Button

**Role:** Main calls to action

Active Fire (#ff8800) background, Canvas White (#ffffff) text, 50px border radius for a distinctive pill shape, 18px vertical and 23px horizontal padding. Font is Mija.

### Outlined Accent Link

**Role:** Secondary links with visual emphasis

Transparent background, Subtle Glow (#ffaa20) text and 1px border, 0px border radius, with 100px horizontal padding, often used in decorative contexts. Font is Mija.

### App Store Download Button

**Role:** Directing users to download the app

Features a transparent background with a Canvas White (#ffffff) border, text, and icon. Uses an 18px vertical and 23px horizontal padding, with a 50px radius to match the primary button's pill shape. Font is Mija.

## Do's

- Prioritize deep Midnight Noir (#000000) for all main backgrounds to maintain the dark, atmospheric tone.
- Use Mija webfont weight 300 for all headlines and significant text at larger sizes (24px, 32px) to convey understated elegance.
- Apply a 50px border-radius to all primary action buttons for a consistent pill-shaped aesthetic.
- Use Active Fire (#ff8800) exclusively for filled primary calls to action to ensure visual hierarchy and warmth.
- Maintain generous sectionGap of 100px between major content blocks to create ample breathing room in the dark layout.
- Use Canvas White (#ffffff) for primary text and Ghostly Gray (#333333) for muted text and subtle UI elements, ensuring readability against the dark background.

## Don'ts

- Avoid using bright or light backgrounds for main content sections; the system relies on a dark theme.
- Do not introduce sharp, angular shapes for interactive elements; prefer soft curves or pill shapes for buttons.
- Refrain from heavy drop shadows or excessive elevation; the design system favors a flat, subtle luminescence.
- Do not clutter layouts; aim for comfortable density with 100px section gaps and clear, isolated element placement.
- Avoid generic sans-serif fonts; Mija's distinct serif style is central to the brand's sophisticated visual identity.
- Do not use multiple accent colors; concentrate on the Active Fire (#ff8800) and Subtle Glow (#ffaa20) palette for all interactive highlights.

## Layout

The page uses a full-bleed, dark layout without a fixed max-width, allowing background elements to extend edge-to-edge. The hero section features a centered headline and description over a dark, atmospheric visual. Content sections maintain consistent vertical spacing of 100px, although specific internal content structures are minimal, mainly focusing on centered text blocks and a single mobile device visual. Navigation is handled by a minimal top-left logo and a hamburger menu icon on the top right, with no visible sticky header.

## Imagery

This site uses minimal, abstract, and stylized 3D graphics that seem to pulsate with a soft internal glow. The 'Chantlings' themselves appear as dark, bulbous, vaguely organic shapes with glowing orange internal elements, contained within a dark, almost sculptural environment. Imagery serves an atmospheric and symbolic role rather than explanatory content, blending seamlessly into the dark UI without sharp edges or heavy outlines. The iconography focuses on simple, outlined white forms against the dark background, maintaining a light footprint.

## Similar Brands

| Business | Why |
| --- | --- |
| Calm | Uses a dark, immersive interface with subtle glow effects and a focus on atmospheric visuals to create a serene user experience. |
| Endel | Employs dark backgrounds and abstract, often glowing, visual elements to represent sound and create an ambient, focused environment. |
| Headspace (dark mode) | Similar approach to deep, dark backgrounds with gentle, outlined illustrations and minimal, friendly typography for a calming effect. |
| Arc Browser | Embraces a highly customized, sometimes dark, UI with a focus on fluid interactions and subtle, integrated visual accents. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #333333
accent: #ffaa20
primary action: #ff8800 (filled action)

3-5 Example Component Prompts:
1. Create a hero section: Midnight Noir (#000000) background. Headline 'Chantlings' at 32px Mija weight 300, Canvas White (#ffffff). Subtext 'Explore tone and harmony...' at 20px Mija, Canvas White (#ffffff). Position prominently centered.
2. Create a Primary Action Button: #ff8800 background, #222222 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
3. Create a ghost navigation button: Transparent background, Ghostly Gray (#333333) text, 1px Ghostly Gray (#333333) border, 0px border-radius, 18px padding, Mija font. Text 'Heart of Noise'.
4. Create a minimal text link: Canvas White (#ffffff) text using Mija font at 20px, with no explicit background or border, against a Midnight Noir (#000000) canvas. Text 'Press'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513881276-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513881276-thumb.jpg |
