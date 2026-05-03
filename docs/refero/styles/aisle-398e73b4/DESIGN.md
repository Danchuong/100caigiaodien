# Aisle — Refero Style

- Refero URL: https://styles.refero.design/style/398e73b4-c1ea-4283-a1f7-f4d47a548b4b
- Site URL: https://periodaisle.com
- ID: 398e73b4-c1ea-4283-a1f7-f4d47a548b4b
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T02:48:22.977Z
- Ranks: newest: 288, popular: 829, trending: 662

> earthy comfort, quiet confidence

## Description

Aisle uses a natural, organic visual language with a focus on soft, inviting textures and a grounding palette. Typography balances modern, geometric forms with humanistic touches, creating approachability. Surfaces are generally flat and minimal, with subtle borders and inset shadows providing depth rather than heavy elevation. The design promotes a sense of calm and natural comfort, utilizing earth tones and a singular vibrant accent for key interactive elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Forest Green | #144747 | brand | Primary action background, decorative accents, button borders, and subtle inset shadows. This deep, muted green grounds interactive elements |
| Harvest Gold | #d9e142 | accent | Promotional call-to-action buttons for discounts, signifying a distinct, attention-grabbing interactive state |
| Deep Plum | #162a91 | brand | Backgrounds for informational sections or decorative elements |
| Rose Bloom | #c52242 | brand | Backgrounds for informational sections or decorative elements |
| Ocean Stone | #516b84 | brand | Backgrounds for informational sections or decorative elements |
| Warm Clay | #bdab9b | brand | Backgrounds for informational sections or decorative elements |
| Graphite | #292623 | neutral | Primary text, prominent headings, borders. Forms the core dark contrast for content |
| Canvas White | #fffffb | neutral | Base page background, light surface cards, primary text on dark backgrounds |
| Pure White | #ffffff | neutral | Elevated modal backgrounds, input fields, and text on dark elements. Distinct from Canvas White for higher contrast needs |
| Pale Ash | #e3e8df | neutral | Subtle card backgrounds, section dividers, and muted borders. Provides a soft, almost imperceptible separation |
| Jet Black | #000000 | neutral | Secondary text, icons, and input borders. Used for deeper contrast than Graphite |
| Light Pebble | #d6d4d3 | neutral | Fine borders and subtle dividers |
| Cream Tint | #f5f5f2 | neutral | Card backgrounds, very light borders, and subtle inset shadows |
| Dark Charcoal | #201d1d | neutral | Subtly darker text and border elements for slight emphasis |
| Slate Gray | #606a72 | neutral | Muted icon strokes and input borders |
| True Black | #10131c | neutral | Button borders for a very dark, grounding edge |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Montserrat | system-ui | 400, 600, 700 | 10px, 12px, 14px, 16px | 1.00, 1.10, 1.20, 1.67 | Default body text, links, navigation items, and small informational text. Its clean, geometric sans-serif form offers high legibility across various sizes. |
| Moderat | Inter | 400, 600, 700 | 14px, 18px, 20px, 24px, 32px | 1.00, 1.10, 1.20, 1.40 | Secondary headings, button text, and slightly more prominent body copies. Provides a subtle contemporary touch with its humanist sans-serif characteristics. |
| roc-grotesk-wide | Oswald | 400, 700 | 12px | 1.10, 1.40 | Labels, captions, and emphasized small text. Its wide, tracked-out styling creates a distinct, modern identity. |
| Arial | Arial | 400 | 13px | 1.20 | Fallback text, mainly used for small, functional elements. |
| RocGrotesk-ExtraWide | Oswald | 400 | 48px, 56px | 1.00 | Large display headings and hero section typography. The extra-wide setting conveys strength and emphasis without hyper-bold weights. |
| Poppins | Montserrat | 400, 700 | 25px, 85px | 1.10 | Specific display text for impactful statements and large numerical values. Its friendly, geometric forms add personality. |
| ModeratMono | Space Mono | 400 | 11px | 1.00 | Monospaced text for product codes or technical details, offering a distinct visual break. |
| GTStandard-M |  | 400 | 14px | 1.5 | GTStandard-M — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1 |  |
| body | 14 | 1.1 |  |
| body-lg | 16 | 1.2 |  |
| subheading | 18 | 1.2 |  |
| heading-sm | 20 | 1.2 |  |
| heading | 24 | 1.4 |  |
| heading-lg | 32 | 1.4 |  |
| display-sm | 48 | 1 |  |
| display | 56 | 1 |  |
| display-lg | 85 | 1.1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "pills": "100px",
    "inputs": "4px",
    "buttons": "39px"
  },
  "elementGap": "4px",
  "sectionGap": "120px",
  "cardPadding": "10px",
  "pageMaxWidth": null
}
```

## Components

### Primary Ghost Button

**Role:** Standard interactive element for calls to action.

Background rgba(211, 206, 197, 0.09) fading to transparent. Text color Forest Green (#144747). Border Forest Green (#144747). Radius 39px. Padding 16px vertical, 24px horizontal. Features a 2px inset shadow of Forest Green (#144747).

### Secondary Ghost Button

**Role:** Less prominent interactive elements, often used for navigation or supplementary actions.

Background transparent. Text color Pure White (#ffffff). Border Pure White (#ffffff). Radius 0px. Padding 0px. Used in overlays or dark sections.

### Promotional Button

**Role:** Highlighting special offers or urgent calls to action.

Background Harvest Gold (#d9e142). Text color Jet Black (#000000). Border Jet Black (#000000). Radius 39px. Padding 16px vertical, 24px horizontal.

### Ghost Button (dark text)

**Role:** Interactive elements on light backgrounds where a dark text contrast is needed.

Background transparent. Text color Graphite (#292623). Border Graphite (#292623). Radius 0px. Padding 0px.

### Default Card

**Role:** Basic content container, typically for product listings or informational blocks.

Background transparent. No border. No shadow. Radius 0px. Padding 0px.

### Elevated Card

**Role:** Content cards with slight visual separation from the background.

Background Cream Tint (#f5f5f2). No border. No shadow. Radius 0px. Padding 0px.

### Input Field

**Role:** Standard form input for text entry.

Background Pure White (#ffffff). Text color jet Black (#000000). Border Slate Gray (#606a72). Radius 4px. Left padding 16px. Vertical padding 12px.

### Radio/Checkbox Input

**Role:** Interactive selectors.

Background transparent. Text color Graphite (#292623). Border Jet Black (#000000). Radius 50% (circular). No padding. These are likely custom radio buttons or checkboxes.

## Do's

- Use Forest Green (#144747) for all primary interactive elements and subtle inset button shadows to maintain a cohesive brand feel.
- Apply a 39px border-radius to all primary buttons for a soft, pill-like appearance.
- Prioritize Montserrat for all body text and general interface labels in weights 400, 600, or 700 with standard letter spacing.
- Employ RocGrotesk-ExtraWide at 48px or 56px, weight 400, for heroic headlines to convey prominence with minimalist impact.
- Structure layouts with a default 4px element gap for compact content, expanding to 10px for card padding, and 120px for section separation.
- Utilize Pale Ash (#e3e8df) or Cream Tint (#f5f5f2) for backgrounds of distinct content blocks to create subtle layering against the Canvas White (#fffffb) page background.
- Ensure input fields have a Pure White (#ffffff) background, Jet Black (#000000) text, and a Slate Gray (#606a72) border with a 4px radius.

## Don'ts

- Avoid harsh, strong shadows; use only the defined inset shadows for buttons.
- Do not use saturated brand colors like Deep Plum, Rose Bloom, Ocean Stone, or Warm Clay as primary text or border colors; reserve them for background blocks.
- Do not vary border-radius for cards; maintain a sharp 0px radius for all card components.
- Avoid using generic blue for links; all links should primarily use Graphite (#292623) or Pure White (#ffffff) based on context.
- Do not overuse the Harvest Gold (#d9e142) accent; reserve it strictly for high-impact promotional buttons.
- Do not introduce new typefaces; restrict typography to Montserrat, Moderat, roc-grotesk-wide, RocGrotesk-ExtraWide, Poppins, ModeratMono, and Arial.
- Avoid complex gradients; the system operates on solid colors and subtle color shifts.

## Layout

The page primarily uses a full-bleed layout, particularly for hero sections and lifestyle imagery that spans the viewport width. Content within sections tends to be centrally aligned or uses alternating text-left/image-right compositions. Vertical rhythm is established through consistent section gaps, creating a spacious and unhurried browsing experience. Navigation is a prominent sticky header at the top, offering primary categories and utility icons.

## Imagery

Photography is dominant, featuring natural-looking models in casual, relatable poses, often against muted or earthy backdrops, emphasizing comfort and authenticity. Product shots are typically clean, close-up crops, minimizing distractions. Iconography is simple and outlined, often in black or a supporting neutral, maintaining the minimalist and natural aesthetic. Imagery is used expansively, sometimes full-bleed beneath text, contributing significantly to the atmospheric quality of the design.

## Elevation

| Element | Style |
| --- | --- |
| Primary Ghost Button | inset 0px 0px 0px 2px rgb(20, 71, 71) |
| Secondary Ghost Button (white border) | inset 0px 0px 0px 2px rgb(255, 255, 255) |
| Alternative Ghost Button (cream border) | inset 0px 0px 0px 2px rgb(245, 245, 242) |

## Similar Brands

| Business | Why |
| --- | --- |
| Everlane | Shares a focus on natural textures, muted color palettes, and minimalist, photography-driven product presentations. |
| Outdoor Voices | Utilizes comfortable, inclusive lifestyle photography in earthy tones, paired with clean typography and soft, simple UI elements. |
| Warby Parker | Exhibits a clean e-commerce aesthetic with strong product photography, minimalist UI, and approachable typography, often using soft background colors. |
| Allbirds | Known for natural materials, a muted color palette accented with pops of color, and humanistic, legible typography in a spacious layout. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #292623 (Graphite)
background: #fffffb (Canvas White)
border: #d6d4d3 (Light Pebble)
accent: #d9e142 (Harvest Gold)
primary action: #144747 (filled action)

Example Component Prompts:
Create a Primary Action Button: #144747 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
Create a promotional button with text 'Unlock Discount': background #d9e142, text color #000000, border color #000000, radius 39px, vertical padding 16px, horizontal padding 24px.
Create an input field with placeholder text 'Your Email': background #ffffff, text color #000000, border color #606a72, radius 4px, left padding 16px, vertical padding 12px, Montserrat font at 16px weight 400.
Create a default card: background transparent, no border, radius 0px, padding 0px.
Create a heading: 'Compare Systems'. RocGrotesk-ExtraWide at 48px, weight 400, #292623, line height 1.0.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517271483-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517271483-thumb.jpg |
