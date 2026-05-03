# Typewolf — Refero Style

- Refero URL: https://styles.refero.design/style/c46ecd77-9c92-4a85-9162-c6d4afd99d95
- Site URL: https://typewolf.com
- ID: c46ecd77-9c92-4a85-9162-c6d4afd99d95
- Theme: light
- Industry: design
- Created: 2026-01-31T15:28:56.000Z
- Ranks: newest: 1249, popular: 543, trending: 872

> Letterpress on aged paper. This design feels like pages from an expertly printed, well-loved typography textbook.

## Description

This design system evokes the tactile quality of a letterpress studio, balancing classic elegance with a distinct, almost academic feel. A highly restrained palette of mauves and desaturated grays, anchored by a creamy off-white background, defines its sophisticated, understated mood. The interplay of custom serif and sans-serif fonts, particularly a heavy sans-serif with subtle negative letter-spacing for accents, establishes an intellectual yet approachable tone, akin to a well-curated typographic journal.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Cream Canvas | #f8f5f5 | neutral | Page backgrounds, subtle card outlines, content separators. |
| Cloud White | #ffffff | neutral | Card backgrounds, input fields, highlighted content blocks. |
| Dusty Mauve | #cfc6c7 | neutral | Input and button borders, subtle dividers. |
| Inkwell Gray | #443235 | neutral | Primary body text, link default state, subtle decorative elements, badge text. |
| Charcoal Text | #2e2c2c | neutral | Headings, prominent text, high-contrast elements. |
| Plum Accent | #654a4 | brand | Hover state for links and navigation, secondary buttons, subtle background for selected items — providing depth and interaction feedback. |
| Rosewood CTA | #916a70 | brand | Primary call-to-action buttons, active navigation items — a warm, inviting accent without overt vibrancy. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| DomaineText | Source Serif Pro | 400 | 14px, 16px, 18px, 24px, 28px | 1.20, 1.25, 1.30, 1.40, 1.45, 1.50 | Primary display serif font for subtle headings, body text, badges, and general content. Its distinct character shapes define the site's classic, editorial feel. Sizes 14-18px at weight 400 are common for body paragraphs and descriptions. |
| Dia | Inter | 900 | 12px, 13px, 14px, 15px | 1.20, 1.30, 2.20 | Distinctive sans-serif used for navigation items, secondary headings, and interactive elements. Its extreme weight (900) at small sizes (12-15px) with negative letter-spacing (-0.03em) creates a condensed, impactful yet sophisticated impression, making it a signature choice for interactive text. |
| DomaineDisplayNarrow | Playfair Display | 700 | 26px, 42px, 46px | 1.20 | Primary serif font for prominent headings. Used at larger sizes (26-46px) and a bold weight (700) for impactful titles, maintaining an elegant, authoritative presence. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.3 | -0.48 |
| body-sm | 14 | 1.5 |  |
| body | 16 | 1.4 |  |
| subheading | 18 | 1.25 |  |
| heading-sm | 24 | 1.2 |  |
| heading | 26 | 1.2 |  |
| heading-lg | 42 | 1.2 |  |
| display | 46 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "small": "4px",
    "default": "0px"
  },
  "elementGap": "",
  "sectionGap": "64px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Content Card Grid



### Navigation Bar



### Promo Card — Definitive Guide



### Primary Call to Action Button

**Role:** Interactive element

Filled button with Rosewood CTA background (#916a70), Cloud White text (#ffffff). No border radius, borders are 0px. Padding is top: 15px, right: 11px, bottom: 12px, left: 11px.

### Secondary Button

**Role:** Interactive element

Filled button with Plum Accent background (#654a4e), Cloud White text (#ffffff). No border radius, borders are 0px. Padding is top: 18px, right: 20px, bottom: 16px, left: 20px.

### Default Input Field

**Role:** Data input

Cloud White background (#ffffff), Inkwell Gray text (#443235). Border is 1px solid Dusty Mauve (#cfc6c7). No border radius, borders are 0px. Padding is 10.5px on all sides.

### Flat Badge

**Role:** Categorization/metadata

Transparent background (rgba(0,0,0,0)), Inkwell Gray text (#443235). No border, no border radius. No explicit padding (0px on all sides), relying on text spacing.

### Content Card

**Role:** Content container

Cloud White background (#ffffff) with a subtle shadow: rgba(145, 106, 112, 0.15) 0px 6px 24px 0px. No explicit border radius other than 0px. Internal padding varies; content areas often have 12px vertical spacing with elements. Headlines use DomaineDisplayNarrow 46px/1.2 at #2e2c2c.

### Navigation Link

**Role:** Navigation element

Dia 900, 14px/-0.03em letter-spacing, Inkwell Gray (#443235). On hover, color changes to Plum Accent (#654a4e). No explicit background or radius.

### Hero Section Title

**Role:** Page headline

DomaineDisplayNarrow 700 with size 46px and lineHeight 1.2, in Charcoal Text (#2e2c2c). Subtitle uses DomaineText 18px 400.

## Do's

- Use Cream Canvas (#f8f5f5) as the default page background to establish the site's light, subtle aesthetic.
- Apply Charcoal Text (#2e2c2c) for primary headlines and Inkwell Gray (#443235) for body text, maintaining contrast and readability.
- Emphasize interactive elements and calls to action with Rosewood CTA (#916a70) as the background color for primary buttons.
- Utilize Dia 900 font with -0.03em letter-spacing for all navigation items and concise, impactful labels.
- Maintain a default border radius of 0px for most elements to reinforce the crisp, structured aesthetic, only deviating to 4px for specific components where a subtle break is required.
- Apply the shadow rgba(145, 106, 112, 0.15) 0px 6px 24px 0px for elevated content cards, ensuring subtle depth without harshness.
- Employ DomaineText at 14-18px for body and descriptive text to maintain the editorial and inviting tone.

## Don'ts

- Avoid using highly saturated, vibrant colors; stick to the muted, near-gray, and earthy tones defined in the palette.
- Do not introduce rounded corners arbitrarily; reserve the 4px radius only where explicitly defined for small, functional elements.
- Refrain from using excessively bold weights for body text; DomaineText 400 is sufficient for paragraphs.
- Do not deviate from the specified letter-spacing for Dia font; the -0.03em is integral to its distinctive appearance.
- Do not use dark backgrounds for main content areas; the design is firmly built on a light theme with Cream Canvas and Cloud White surfaces.
- Avoid generic, system fonts; prioritize DomaineText, Dia, and DomaineDisplayNarrow to preserve the site's unique typographic identity.
- Do not use box-shadows on individual text elements; reserve them for content containers like cards for subtle elevation.

## Layout

The page primarily uses a max-width contained model, with content centered. The hero section features a centered headline and subtitle over the Cream Canvas background. Content sections generally consist of a grid of cards, often two columns wide, each card presenting a distinct article or resource. Each card is a self-contained unit with its own content and visual treatment. There's a consistent vertical rhythm of spacing between elements and sections, contributing to an organized, readable flow. Navigation is a minimalist top-bar with horizontally listed links, and a prominent header introducing the brand. The layout is information-dense yet visually uncluttered.

## Imagery

This site features illustrations and product screenshots, all contained within specific sections or cards. Illustrations are line-art based, often black or brand-colored on a solid, muted background (like the orange card background). Photography, when present, appears to be product-focused (e.g., large letterforms, type specimens). The overall treatment is contained and isolated, with no full-bleed or overlapping imagery. Images serve an explanatory or decorative role within their content blocks, enhancing the editorial feel rather than dominating the layout. Icons are minimal, likely line-art to match the illustrations.

## Elevation

| Element | Style |
| --- | --- |
| Content Cards | rgba(145, 106, 112, 0.15) 0px 6px 24px 0px |
| Hovered Link Cards | rgb(245, 241, 242) 0px -3px 0px 0px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Fonts In Use | Shares a similar focus on typography as a primary visual element, with an editorial, content-rich layout and a restrained color palette. |
| The Brand New (Brandings) | Employs a content-first approach with a classic, professional typographic hierarchy and often uses a light background with subtle accents. |
| AIGA Eye on Design | Curated content presented with a distinct, often nuanced typographic style, leaning towards a sophisticated editorial aesthetic with controlled color usage. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (body): #443235
- Text (headline): #2e2c2c
- Background (page): #f8f5f5
- Background (card): #ffffff
- CTA (button): #916a70
- Primary Accent: #654a4e

### 3-5 Example Component Prompts
1.  **Create a Primary Call to Action Button:** text 'Learn More →', background #916a70, text color #ffffff, border-radius 0px, padding 15px 11px 12px 11px. Font is Dia 900, 14px, lineHeight 1.2, letterSpacing -0.03em.
2.  **Generate a Content Card:** white background #ffffff, with shadow rgba(145, 106, 112, 0.15) 0px 6px 24px 0px. Headline 'My Favorite Fonts' in DomaineDisplayNarrow 700, 26px, #2e2c2c. Body text 'A curated list...' in DomaineText 400, 16px, #443235. Internal padding around content of 12px.
3.  **Design a Navigation Link:** text 'Font Lists', color #443235. On hover, color changes to #654a4e. Font is Dia 900, 14px, lineHeight 1.2, letterSpacing -0.03em. No background, no padding.
4.  **Compose a Default Input Field:**  background #ffffff, text color #443235, border 1px solid #cfc6c7, border-radius 0px, padding 10.5px. Placeholder text is DomaineText 400, 16px, #443235 with 50% opacity.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924011975-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924011975-thumb.jpg |
