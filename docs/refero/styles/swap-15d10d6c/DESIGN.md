# Swap — Refero Style

- Refero URL: https://styles.refero.design/style/15d10d6c-1844-46c6-ae69-c99a56e6ad41
- Site URL: https://www.swap-commerce.com
- ID: 15d10d6c-1844-46c6-ae69-c99a56e6ad41
- Theme: light
- Industry: saas
- Created: 2026-04-30T00:19:58.237Z
- Ranks: newest: 833, popular: 851, trending: 716

> Crisp AI Canvas

## Description

Swap's design system evokes an 'AI as a service' aesthetic with a bright, spacious, and slightly austere canvas adorned with precise, geometric forms. Typography is a key differentiator: elegant, thin headings juxtapose with a workhorse sans-serif for body text, creating a contrast of sophistication and clarity. A prominent, vibrant green gradient is used sparingly as a functional accent, making interactive elements feel 'charged'. Surfaces are predominantly clean white, occasionally featuring subtle shadows for a light sense of elevation or rich, deep-toned section cards. Components are generally compact and direct, prioritizing information delivery over heavy ornamentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Primary page and card backgrounds |
| Graphite Inset | #2d3637 | neutral | Darker, rich card backgrounds typically for content sections |
| Shadow Green BG | #0d5b3b | neutral | Background for rich content blocks and section cards |
| Deep Forest BG | #083a26 | neutral | Background for rich content blocks and section cards, slightly darker than Shadow Green |
| Stone Beige | #e9e7e2 | neutral | Subtle background for ghost button fills and secondary elements |
| Outline Gray | #cccccc | neutral | Hairline borders and divider lines |
| Text Black | #000000 | neutral | Primary text, headings, and icon fill |
| Muted Ash | #999999 | neutral | Tertiary text, subtle link backgrounds |
| Mint Accent | #a3fda7 | brand | Primary action backgrounds, active states, and decorative accents |
| Subtle Sage | #9cb0a8 | neutral | Outline for ghost buttons, soft borders for interactive elements |
| Agentic Gradient | #82ff87 | accent | Hero text and prominent graphical elements — conveys digital energy |
| Subtle Gray Card | #838676 | neutral | Background for specific content cards or sections, a cool gray |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| mainFont | Inter | 400, 500, 700 | 9px, 12px, 15px, 16px, 18px, 24px, 30px | 1.00, 1.20, 1.40, 1.50 | Primary text across body, buttons, and system elements. Its neutral forms ensure legibility and a consistent functional tone. |
| secondaryFont | Playfair Display | 100, 300 | 72px, 80px, 120px | 0.95, 1.00 | Display headlines and hero text. The extremely light weights (100, 300) combined with generous sizes create an airy, sophisticated, and slightly understated grandeur for bold statements, contrasting with conventional heavy headings. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 15 | 1.4 |  |
| subheading | 18 | 1.5 |  |
| heading | 24 | 1.4 |  |
| heading-lg | 30 | 1.2 |  |
| display | 72 | 0.95 | -1.22 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "24px",
    "inputs": "100px",
    "buttons": "200px",
    "general": "10px"
  },
  "elementGap": "8px",
  "sectionGap": "30px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Text Button

**Role:** Navigation links and secondary actions

Background transparent, text 'Text Black' (#000000), no border, no radius. Padding: 1.5px vertical, 0px horizontal.

### Pill Accent Button

**Role:** Primary call-to-actions

Background 'Mint Accent' (#a3fda7), text 'Text Black' (#000000), border 'Mint Accent' (#a3fda7). Radius: 200px. Padding: 0px vertical, 18.8px horizontal.

### Pill Ghost Button

**Role:** Secondary and descriptive actions

Background 'Stone Beige' (#e9e7e2), text 'Text Black' (#000000), border 'Stone Beige' (#e9e7e2). Radius: 1.67772e+07px (effectively full pill). Padding: 7.2px vertical, 10.2px horizontal.

### Card with Shadow

**Role:** Content containers with subtle elevation

Background 'Canvas White' (#ffffff), radius 24px. Shadow: 'rgba(0, 0, 0, 0.09) 0px 0px 28px 0px'. Padding: 20px all sides.

### Dark Content Card

**Role:** Prominent content blocks, often for feature showcases

Background 'Graphite Inset' (#2d3637), radius 24px. No shadow. No padding (content handles internal spacing).

### Accent Gradient Card

**Role:** Prominent content blocks, usually for features or special offers

Background 'Deep Forest BG' (#083a26), radius 24px. No shadow. No padding (content handles internal spacing).

### Minimal Input Field

**Role:** Form inputs

Background transparent, text 'Canvas White' (#ffffff) or 'Text Black' (#000000). Border 1px solid 'Outline Gray' (#cccccc). Radius: 100px. Padding: 12px vertical, 18.8px horizontal.

## Do's

- Use 'Canvas White' (#ffffff) as the primary background for most sections.
- Apply 'Text Black' (#000000) for all primary body text and headings.
- Emphasize primary calls-to-action with the 'Pill Accent Button' featuring 'Mint Accent' (#a3fda7) background.
- Use 'secondaryFont' at weight 100 or 300 for all large display headlines to maintain a refined, light aesthetic.
- Apply a 24px border-radius to all card components (Card with Shadow, Dark Content Card, Accent Gradient Card).
- Maintain generous vertical spacing between major sections, utilizing the 'sectionGap' of 30px.
- Utilize the 'Agentic Gradient' only for hero text or distinct graphical elements, never for backgrounds or small UI details.

## Don'ts

- Avoid heavy shadows; use 'rgba(0, 0, 0, 0.09) 0px 0px 28px 0px' only for intentionally elevated cards.
- Do not use highly saturated colors for general UI elements; reserve 'Mint Accent' (#a3fda7) for primary actions and highlights.
- Never use bold (weight 700) from 'secondaryFont' for headlines; its characteristic is its lightness.
- Do not add additional decorative borders or heavy backgrounds to input fields, they should remain minimal and pill-shaped.
- Avoid tightly packed content; ensure a minimum 'elementGap' of 8px between discrete UI elements.
- Do not use generic square buttons; all distinct interactive buttons should leverage the 200px (full pill) or 1.67772e+07px (rounded pill) radius.

## Imagery

This system primarily uses product-focused design, with custom graphics being a prominent feature. There's a strong lean towards abstract, gradient-filled typography for hero sections and illustrative elements, embodying the 'Agentic Gradient'. Where present, imagery appears to be either logo displays (customer stories) or product screenshots integrated seamlessly into the UI. Icons are minimal, typically 'Text Black' (#000000), and outlined rather than filled, maintaining the lightweight feel. The density is moderate, with ample negative space around key textual and interactive elements, allowing the custom graphics and bold typography to dominate focal points.

## Elevation

| Element | Style |
| --- | --- |
| Card with Shadow | rgba(0, 0, 0, 0.09) 0px 0px 28px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Rive | Uses a similar light theme with specific accent colors for interactivity and large, expressive typography for headlines. |
| Framer | Features a spacious, clean UI with a strong emphasis on typography as a design element and minimal, crisp components. |
| Supabase | Combines a white/light background with a focus on code-like precision and distinctive, often gradient, accent colors for branding and actions. |
| Vercel | Minimalist aesthetic with highly constrained color palette, sharp typography, and a focus on content hierarchy and spatial arrangement. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #000000
background: #ffffff
border: #cccccc
accent: #82ff87 (Agentic Gradient, use for headlines/graphics)
primary action: #a3fda7 (filled action)

### 3-5 Example Component Prompts
1. Create a hero section: 'Canvas White' (#ffffff) background. Centered headline 'The first agentic storefront' using 'secondaryFont' weight 300, size 120px, 'Agentic Gradient' fill, line-height 0.95, letter-spacing -1.22px. Below it, a centered subtext 'Swap replaces static websites...' using 'mainFont' weight 400, size 18px, 'Text Black' (#000000), line-height 1.5. Two buttons below, left: 'Pill Accent Button' ('Mint Accent', #a3fda7, 'Text Black' text, 200px radius); right: 'Dark Filled Button' ('Text Black', '#ffffff' text, 200px radius).
2. Design a feature card: 'Card with Shadow' background ('Canvas White', #ffffff, 24px radius, shadow 'rgba(0, 0, 0, 0.09) 0px 0px 28px 0px'). Use 'mainFont' weight 700, size 24px, 'Text Black' (#000000) for the feature title. Body text 'mainFont' weight 400, size 16px, 'Text Black' (#000000). Padding throughout is 20px.
3. Create a Primary Action Button: #a3fda7 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508371908-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508371908-thumb.jpg |
