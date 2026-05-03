# Sougen — Refero Style

- Refero URL: https://styles.refero.design/style/20c01a33-fded-4094-8450-6114b1508a30
- Site URL: https://sougen.co
- ID: 20c01a33-fded-4094-8450-6114b1508a30
- Theme: light
- Industry: other
- Created: 2026-04-30T02:00:41.298Z
- Ranks: newest: 466, popular: 496, trending: 301

> monochromatic starkness with glowing teal

## Description

Sougen presents a digital-futuristic aesthetic through a high-contrast, mostly achromatic palette punctuated by a singular, vivid teal accent. Typography is a blend of structured geometric sans-serifs, emphasizing clean lines and generous letter spacing that hints at digital interfaces. Components are lightweight, often outlined, and favor rounded forms for interactive elements, reinforcing an approachable yet modern digital presence. The visual system balances stark, almost monochrome backgrounds with vivid, glowing accents to draw attention to interactive elements and brand identity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button backgrounds, default text in negative space |
| Surface Frost | #f9f9f9 | neutral | Slightly off-white backgrounds for subtle surface differentiation, secondary text |
| Border Fog | #e5e7eb | neutral | Hairline borders, dividers, subtle button outlines |
| Text Graphite | #242424 | neutral | Primary body text, headings, dark button backgrounds, icons |
| Pitch Black | #000000 | neutral | Deepest text color for maximum contrast, occasionally used for icons |
| System Teal | #16ebeb | brand | Brand accent, interactive highlights, active states, decorative fills, glowing elements. Signals actionable items and key brand iconography |
| Teal Glow | #6df8f8 | brand | Used for gradient highlights and subtle glowing effects, often paired with System Teal |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Rubik | system-ui, sans-serif | 400, 600, 700 | 9px, 12px, 14px, 15px, 16px, 20px, 22px, 23px, 50px, 100px, 115px, 116px | 0.98, 1.00, 1.03, 1.04, 1.07, 1.23, 1.25, 1.58, 1.59 | Primary headings and display text, conveying a strong, geometric, and modern digital presence with its clean lines. Noticeable for its slightly condensed appearance at larger sizes. |
| Akrobat | Avenir Next, sans-serif | 400, 700 | 16px, 24px, 45px, 86px | 1.00, 1.50 | Large, impactful display headings that provide a unique, highly geometric and wide feel. Used sparingly for maximum effect, reinforcing the high-tech, architectural feel. |
| Open Sans | Roboto, Helvetica Neue, sans-serif | 400, 600, 700 | 8px, 9px, 11px, 12px, 13px, 15px, 16px | 0.77, 1.25, 1.33, 1.46, 1.50, 1.56, 1.58, 1.60, 1.63, 1.64 | Body copy, descriptions, and smaller textual elements. Provides legibility and a neutral grounding against the more prominent display fonts, with varied letter spacing for distinct visual texture. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| heading | 23 | 1.23 | -1.61 |
| heading-lg | 50 | 1.07 | -3.5 |
| display | 100 | 1 | -7 |
| display-xl | 116 | 0.98 | -8.12 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "999px",
    "buttons": "999px"
  },
  "elementGap": "15px",
  "sectionGap": "90px",
  "cardPadding": "15px",
  "pageMaxWidth": null
}
```

## Components

### Hero Outline Button

**Role:** Primary call to action in hero sections.

Ghost button with rounded corners: Text Graphite for text, transparent background, Border Fog 1px border. Padding of 0px top/bottom, 15px left/right. Font Rubik, weight 400. Letter spacing 0.07em.

### Accent Ghost Button

**Role:** Secondary call to action or interactive element.

Transparent background button with Border Fog border and rounded corners (999px). Uses Text Graphite for text. Padding of 0px top/bottom, 15px left/right.

### Filled Dark Button

**Role:** High-contrast action button.

Solid Text Graphite background with Canvas White text and rounded corners (999px). Padding of 0px top/bottom, 20px left/right.

### Footer Nav Link

**Role:** Navigation links in the footer.

Text Graphite text, 0px border-radius, top padding 20px, bottom padding 20px, left padding 50px.

### Subtle Dividers

**Role:** Visual separation between content blocks.

Hairline borders using Border Fog, primarily for horizontal separation.

## Do's

- Prioritize a System Teal accent for all interactive elements, active states, and small brand details, like button borders or icon fills for calls to action.
- Use Text Graphite (#242424) for primary body text and most headings, transitioning to Pitch Black (#000000) only for highest contrast where context allows.
- Employ Rubik for most major headings and display text, leveraging its geometric character. For maximal impact, use Akrobat for the largest, most significant titles.
- Ensure all interactive buttons and tags utilize a 999px border-radius, creating an approachable, pill-shaped aesthetic.
- Maintain high contrast between text and backgrounds; primarily use Canvas White (#ffffff) or Surface Frost (#f9f9f9) for backgrounds against dark text.
- Apply Open Sans (#400) for all body copy and descriptive text, ensuring readability across varying text densities.
- Introduce a subtle 1px Border Fog (#e5e7eb) for dividers, outlines, and inactive states to maintain visual structure without heaviness.

## Don'ts

- Avoid introducing additional chromatic colors; the System Teal (#16ebeb) is the sole brand accent.
- Do not use heavy, filled background cards or sections; prefer transparent or subtly differentiated Surface Frost (#f9f9f9) and Canvas White (#ffffff) backgrounds.
- Do not use standard rectangular buttons; all buttons and tags should adhere to the 999px rounded-corner aesthetic.
- Avoid mixing font families arbitrarily; stick to Rubik for headings/display, Akrobat for impactful titles, and Open Sans for body text.
- Do not use dark backgrounds extensively; the site is predominantly light-themed, with dark elements serving as strong contrast points.
- Do not rely on subtle visual cues for interactive elements; the System Teal should clearly indicate clickable or active states.
- Avoid complex shadow effects; stick to the subtle glow of rgba(109, 248, 248, 0.6) 0px 0px 4px 1px for accent glow or rgba(0, 0, 0, 0.05) 5px 5px 15px 5px for soft elevation.

## Layout

The page employs a full-bleed layout for the hero section with a centered, high-contrast headline and supporting text. Subsequent sections appear to follow a max-width contained pattern, with content likely centered. Vertical spacing between sections is generous, contributing to a comfortable density. Content arrangement often features a centered stack for textual information, transitioning to a split-section for features or ecosystem details. The navigation consists of a minimal top bar with social icons and a 'Scroll Down' indicator for primary interaction guidance.

## Imagery

The visual language is characterized by 3D rendered, stylized characters and abstract architectural forms, primarily in achromatic tones (white, black, gray). The core imagery is a character in a white hooded cloak with glowing System Teal accents, symbolizing technological advancement. Graphics are clean, often outlined, and minimal, contributing to a futuristic, digital aesthetic. Imagery serves an explanatory and atmospheric role, showcasing product concepts rather than real-world applications. The density is moderate, with imagery occupying dominant visual space in the hero section and complementing text in content blocks.

## Similar Brands

| Business | Why |
| --- | --- |
| The Sandbox | Web3/Metaverse sites with similar blend of digital art and clean UI, focused on immersive user experience. |
| Decentraland | Platform-focused metaverse brand leveraging a future-forward, digital aesthetic with distinct accent colors on minimal backgrounds. |
| Figma | Modern design tool with a clear, functional monochromatic UI and a strong accent color for interactive elements and brand recognition. |
| Linear | Productivity tool with a minimalist, high-contrast interface, relying on careful typography and a strategic accent color to define its brand. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #242424
- background: #ffffff
- border: #e5e7eb
- accent: #16ebeb
- primary action: no distinct CTA color

### 3-5 Example Component Prompts
- Create a hero section with a 'Hero Outline Button': transparent background, Border Fog (#e5e7eb) 1px border, 999px radius, Text Graphite (#242424) text, Rubik font weight 400, 0px vertical padding, 15px horizontal padding.
- Design a footer navigation bar with 'Footer Nav Link' items: Text Graphite (#242424) text, Open Sans font, no border, 20px top/bottom padding, 50px left padding.
- Implement a 'Filled Dark Button': Text Graphite (#242424) background, Canvas White (#ffffff) text, 999px radius, 0px vertical padding, 20px horizontal padding, Rubik font, weight 400.
- Construct a content block with a subtle divider: use a 1px solid Border Fog (#e5e7eb) for horizontal separation, with Canvas White (#ffffff) background for content areas.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514423794-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514423794-thumb.jpg |
