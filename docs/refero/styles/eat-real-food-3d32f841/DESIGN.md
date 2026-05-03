# Eat Real Food — Refero Style

- Refero URL: https://styles.refero.design/style/3d32f841-490d-4e5f-aba0-43c9d0c13130
- Site URL: https://realfood.gov
- ID: 3d32f841-490d-4e5f-aba0-43c9d0c13130
- Theme: light
- Industry: other
- Created: 2026-04-30T00:17:40.047Z
- Ranks: newest: 843, popular: 1104, trending: 1138

> Stark Manifesto on Creamy Canvas

## Description

Eat Real Food uses a high-contrast, text-dominant visual system, evoking authority and directness. Dark charcoal text on light, almost creamy backgrounds creates a stark, legible interface. Typography is the primary visual driver, featuring prominent, oversized headlines and deliberate letter spacing. The system is largely monochrome, punctuated by a vivid red that acts as a symbolic warning and highlight for critical data points, reinforcing the urgent message of the content.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #110000 | neutral | Primary text, heading text, accent for borders and outlines, background for certain interactive elements |
| Buttermilk | #fdfbee | neutral | Primary background for cards and interactive components |
| Paper White | #ffffff | neutral | Light text on dark surfaces, inverse labels, and high-contrast captions. Do not promote it to the primary CTA color |
| Light Linen | #f3f0d6 | neutral | Dominant page background, providing a subtle off-white canvas |
| Silver Mist | #e5e5e5 | neutral | Subtle borders and dividers, indicating structural separation |
| Ash Shadow | #d2d0c6 | neutral | Subtle shadow color for elevated elements, adding depth without heaviness |
| Muted Stone | #8d7d7d | neutral | Secondary text for less prominent information, maintaining legibility against light backgrounds |
| Pale Gray | #bebcb3 | neutral | Subtle background for UI elements, supporting a muted visual hierarchy |
| Warning Red | #d50000 | accent | Red wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Use as a supporting accent, not as a status color |
| Alert Red 1 | #920000 | accent | Red wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Use as a supporting accent, not as a status color |
| Alert Red 2 | #b50000 | accent | Red wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Use as a supporting accent, not as a status color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Die Grotesk D | Bebas Neue | 700 | 32px, 44px, 48px, 96px, 115px, 144px, 155px, 170px | 0.84, 0.86, 0.92, 0.95, 0.96, 1.02, 1.04 | Display headlines and large section titles. Its bold, condensed nature demands attention, creating a powerful, declarative statement. The extremely tight line height ensures words appear as blocks of impact. |
| Die Grotesk A | Inter | 400, 500, 600, 700 | 11px, 12px, 14px, 16px, 33px | 0.98, 1.10, 1.18, 1.20, 1.40, 1.50 | Body text, navigation, and button labels. Its versatility in weights allows for clear hierarchy in functional elements, with subtle negative letter spacing for a compact, refined feel. |
| Die Grotesk B | Open Sans | 500, 700 | 14px, 16px, 19px, 21px, 24px, 26px, 31px | 0.92, 0.95, 0.96, 1.10, 1.18, 1.20, 1.24, 1.50 | Subheadings and supporting statements, bridging the gap between large display type and body text. The tight tracking maintains a composed and serious tone. |
| Geist Mono | Space Mono | 400, 700 | 12px, 16px | 1.18, 1.30, 1.40 | Small, technical information or emphasized quotes where a distinct, spaced-out monospaced character is desired. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.5 | -0.28 |
| heading-sm | 24 | 1.24 | -0.456 |
| heading | 33 | 1.1 | -0.99 |
| heading-lg | 48 | 0.95 |  |
| display | 96 | 0.92 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "images": "24px",
    "buttons": "40px",
    "interactive": "24px",
    "highlightCards": "12px 12px 0px 0px"
  },
  "elementGap": "24px",
  "sectionGap": "80px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Pill Button

**Role:** Primary Call to Action

Filled with Buttermilk (#fdfbee) background, Midnight Ink (#110000) text and border. Features highly rounded corners at 40px radius and generous horizontal padding of 22-28px and vertical of 18px. Typographically, uses Die Grotesk A for clarity and directness.

### Ghost Text Button

**Role:** Secondary Action or Navigation

Transparent background with Midnight Ink (#110000) text. No visible border or padding beyond intrinsic text box. Used for subtle actions or navigation within text. Radius 0px.

### Navigation Link

**Role:** Global Navigation Link

Transparent background with Paper White (#ffffff) text. No explicit border, but a thin white line underneath indicates interaction. Padding 0px top/bottom, 6px right/left. Radius 0px.

### Standard Card

**Role:** Content container for articles or features

Buttermilk (#fdfbee) background with 16px border-radius. Padding of 24px vertically and 32px horizontally. No shadow.

### Elevated Card

**Role:** Prominent content container

Paper White (#ffffff) background with 24px border-radius. Elevated with a dual shadow: rgba(0, 0, 0, 0.1) 0px 10px 40px 0px, rgba(0, 0, 0, 0.1) 0px 20px 60px -10px. Padding 24px all sides.

### Tab Header Card

**Role:** Tab or section header for grouped content

Buttermilk (#fdfbee) background with 12px 12px 0px 0px border-radius (rounded top corners, square bottom). No padding or shadow, indicating it's a structural element for content below.

### Video Player Button

**Role:** Inline media control

Used within media elements. Has a background color of rgba(0, 0, 0, 0) and text color of Midnight Ink (#110000). A 50% border radius implies a circular shape for play icons or specific controls. No padding.

## Do's

- Use Midnight Ink (#110000) as the primary text color and for most interactive elements that are not primary CTA.
- Apply Light Linen (#f3f0d6) as the default background for large page sections to maintain a consistent neutral base.
- Render large headlines (96px and above) with Die Grotesk D, weight 700, and a line height between 0.84 and 0.96 for maximum impact.
- Employ the Pill Button with Buttermilk background and 40px border-radius for primary calls to action, ensuring an approachable yet distinct interactive element.
- Utilize Warning Red (#d50000) strictly for data visualization, warning indicators, or to highlight critical factual elements, never as a general accent.
- Maintain comfortable spacing between elements with a base unit of 4px and elemental gaps typically at 24px.
- Elevate critical content cards with Paper White background and the specific dual shadow: rgba(0,0,0,0.1) 0px 10px 40px 0px, rgba(0,0,0,0.1) 0px 20px 60px -10px.

## Don'ts

- Avoid generic, non-brand specific imagery or illustrations; stick to hard-hitting data visualizations or minimal, focused product shots.
- Do not introduce additional bold accent colors; the system relies on the stark black/white/red contrast.
- Refrain from using thin weights for body text; maintain a minimum of Die Grotesk A 400 for legibility and presence.
- Never overcrowd sections with too much text; leverage the impactful display typography to convey messages concisely.
- Do not use subtle, muted interactive states for primary actions; primary actions should always be clearly distinct in color and shape.
- Avoid excessive use of elevation; reserve shadows for critical interactive cards to maintain visual clarity and weight.
- Do not use standard 4px or 8px border radii for buttons; always use the distinct 40px pill shape or ghost styles.

## Layout

The page maintains a centered, contained layout for primary content, often with no explicit max-width that makes the text feel expansive. Hero sections can be full-bleed with centered headlines over dark backgrounds. Content sections display a consistent vertical rhythm. Information is generally presented in centered stacks for prominent statements or simple multi-column grids for data and supporting details. Navigation is a minimal top bar, with prominent site branding on the left and primary navigation links taking secondary visual presence. The layout emphasizes direct communication over complex visual arrangements, prioritizing reading flow.

## Imagery

Imagery is functional and direct, primarily focusing on data visualizations, abstract graphics, or highly relevant product (food-related) imagery where applicable. Photography is minimal, if present, and likely cropped tightly without lifestyle context. Icons are simple, outlined or filled, mostly monochrome and used sparingly for clarity. The overall density is text-dominant, with images serving to support factual claims rather than create atmosphere.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Card | rgba(0, 0, 0, 0.1) 0px 10px 40px 0px, rgba(0, 0, 0, 0.1) 0px 20px 60px -10px |
| Link with shadow | rgba(0, 0, 0, 0.1) 0px 12px 24px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| The 1619 Project | High-contrast text-heavy design with a stark, monochromatic palette and impactful, large typography. |
| AIGA (American Institute of Graphic Arts) | Authoritative use of typography as major design element, strong black-on-white contrast, and minimal decorative elements. |
| Everytown for Gun Safety | Direct, declarative messaging supported by bold, condensed typography and limited color palette with a prominent warning/action color. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #110000
background: #f3f0d6
border: #e5e5e5
accent: no distinct accent color
primary action: #110000 (filled action)

Example Component Prompts:
Create a hero statement: Light Linen (#f3f0d6) page background, centered, with Die Grotesk D 144px bold text 'Real Food Wins' in Midnight Ink (#110000), line-height 0.86. Below it, add a Die Grotesk A 33px text block, weight 400, color Midnight Ink (#110000), letter-spacing -0.99px, with 40px vertical padding.

Create a Pill Button: Buttermilk (#fdfbee) background, Midnight Ink (#110000) text and 1px border. Font is Die Grotesk A, 18px, weight 500. Border radius 40px, padding top/bottom 18px, left 28px, right 22px. Text 'Learn More'.

Create an Elevated Card: Paper White (#ffffff) background, 24px border-radius. Shadow: rgba(0,0,0,0.1) 0px 10px 40px 0px, rgba(0,0,0,0.1) 0px 20px 60px -10px. Inner padding 24px all sides. Headline Die Grotesk B 31px, weight 700, color Midnight Ink (#110000), letter-spacing -0.589px. Body text Die Grotesk A 16px, weight 400, color Midnight Ink (#110000).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508209877-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508209877-thumb.jpg |
