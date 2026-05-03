# VDL — Refero Style

- Refero URL: https://styles.refero.design/style/111711b0-6feb-4ec0-a8da-532889808d0e
- Site URL: https://neutra-vdl.org
- ID: 111711b0-6feb-4ec0-a8da-532889808d0e
- Theme: light
- Industry: design
- Created: 2026-04-30T01:43:28.738Z
- Ranks: newest: 534, popular: 933, trending: 878

> Architectural Canvas, Black Ink

## Description

The VDL design system evokes the precision of an architectural drawing: minimal and structural. Its visual identity builds on a stark contrast between a warm off-white canvas and deep, nearly black typography. Thin, deliberate lines define sections and interactive elements rather than heavy borders or fills. The typography, using a distinctive architectural sans-serif, carries the weight and character, operating with restrained letter-spacing. Interaction is subtle, relying on understated color shifts and background changes.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Parchment | #f7f4ef | neutral | Page backgrounds, main canvas, soft surface elevation base |
| Ebony | #120902 | neutral | Primary text, headings, significant borders, default interactive text. Creates a strong, structural contrast against Parchment |
| Deep Graphite | #1e1e1e | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Pitch Black | #000000 | neutral | Hover states for text, active navigation elements, highest contrast text |
| Medium Gray | #808080 | neutral | Subtle background accents, secondary surface treatments |
| Neutra Violet | #6a5acd | accent | Violet wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| AGP | Space Mono or IBM Plex Mono for a geometric sans-serif feel with similar character | 400, 500 | 12px, 13px, 16px, 18px, 24px, 67px | 0.80, 1.10, 1.11, 1.16, 1.20, 1.25, 1.30, 1.50 | The sole typeface, AGP, an architectural sans-serif, defines the brand's direct and structural voice. It carries significant visual weight even at lighter settings due to its characteristic letterforms and tight tracking. The varied line-heights and letter-spacing ensure crisp legibility and strong hierarchy when scaling from small labels to large headlines. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.02 |
| body | 16 | 1.25 | -0.02 |
| subheading | 18 | 1.2 | -0.02 |
| heading-sm | 24 | 1.16 | -0.02 |
| display | 67 | 0.8 | -0.05 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "26px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Link

**Role:** Primary navigation item

Text link using Deep Graphite (#1e1e1e) at 13px, bold weight with a 'book tickets' line. On hover, text becomes Pitch Black (#000000). The line has an implicit top border of 1px in Deep Graphite (#1e1e1e) and a bottom padding of 7px. No border radius; sharp edges throughout.

### Headline Section Divider

**Role:** Visual separator for major content blocks

A 1px thin line in Ebony (#120902) directly beneath major headlines, spanning the content width. This line is a core element in establishing structural hierarchy.

### Footer Link

**Role:** Secondary navigation and informational links

Text link in Pitch Black (#000000) using 13px text, transitioning to Ebony (#120902) on hover. Underscored without explicit styling, relying on browser default. Typically grouped vertically.

### Feature List Item

**Role:** Descriptive list items within content sections

Body text at 16px in Pitch Black (#000000) with generous line-height for readability. Often appears within a columnar layout, with minimal spacing between items.

### Primary Heading

**Role:** Dominant titles for major sections

Large text using 67px AGP font, weight 500, in Ebony (#120902), with negative letter-spacing for a condensed, architectural feel. Accompanied by a 1px border line in Ebony (#120902).

## Do's

- Use Parchment (#f7f4ef) as the dominant background color for all page sections.
- Employ Ebony (#120902) for all primary body text, headlines, and significant UI element borders to maintain high contrast and structural integrity.
- Define UI element separation and hierarchy using thin 1px borders in Ebony (#120902) or Deep Graphite (#1e1e1e), rather than shadows or background fills.
- Apply negative letter-spacing for large text elements, specifically -0.0500em for headings and -0.0200em for body text, to reinforce a condensed, architectural aesthetic.
- Maintain a default border radius of 0px for all elements to preserve the sharp, structural visual language.
- Utilize a consistent 20px for element gaps and content padding within cards or structured blocks, creating comfortable density without feeling sparse.
- Introduce Neutra Violet (#6a5acd) sparingly, reserving it for subtle interactive accents or highly specific, small decorative UI elements, never as a primary button background.

## Don'ts

- Avoid using shadows or excessive elevation to differentiate UI elements; rely instead on borders and background color changes (Parchment, Medium Gray).
- Do not introduce additional font families; restrict all typography to the AGP family at specified weights.
- Refrain from using strong, chromatic accent colors for large areas or primary calls to action; color should be a rare, deliberate punctuation.
- Do not round corners on any UI elements; maintain sharp, crisp edges throughout the design system.
- Avoid decorative imagery; focus on functional visuals like product shots or precise iconography that aligns with the architectural theme.
- Do not use letter-spacing greater than 0; all text should be either normally spaced or have subtle negative tracking.
- Do not use filled buttons for primary actions; prefer ghost buttons with text and thin borders.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA Design Archives | Monochromatic palette, emphasis on strong typography, and minimal interaction affordances with understated line work. |
| The Frank Lloyd Wright Foundation | Clean, architectural aesthetic, reliance on strong contrast between text and background, and a sense of ordered simplicity. |
| Bauhaus Archive | Strict grid systems, functional typography, and a deliberate absence of ornamental elements, using lines and planes as primary design tools. |
| Massimo Vignelli's website | Minimalist design, strong typographic hierarchy, and a focus on essential structural elements over decorative flair. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #120902
- background: #f7f4ef
- border: #120902
- accent: #6a5acd
- primary action: no distinct CTA color

Example Component Prompts:
- Create a functional navigation item: Text 'Home' at 13px AGP weight 400, Deep Graphite (#1e1e1e), with a 1px top border in Deep Graphite (#1e1e1e), padding-bottom 7px.
- Create a major section headline: Text 'Architecture' at 67px AGP weight 500, Ebony (#120902), line-height 0.8, letter-spacing -0.05em, with a 1px divider line below in Ebony (#120902).
- Create a descriptive body text paragraph: Text 'The VDL Studio is committed...' at 16px AGP weight 400, Pitch Black (#000000), line-height 1.25, letter-spacing -0.02em.
- Create a contact address block: Text '2300 Silver Lake Blvd' at 13px AGP weight 400, Pitch Black (#000000), line-height 1.5, letter-spacing -0.02em. Each line is its own block, with 20px element gap to the next block.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513387423-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513387423-thumb.jpg |
