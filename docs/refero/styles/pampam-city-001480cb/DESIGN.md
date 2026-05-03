# pampam.city — Refero Style

- Refero URL: https://styles.refero.design/style/001480cb-05f4-4802-be39-84b942169481
- Site URL: https://www.pampam.city
- ID: 001480cb-05f4-4802-be39-84b942169481
- Theme: light
- Industry: design
- Created: 2026-04-30T00:43:53.527Z
- Ranks: newest: 715, popular: 637, trending: 380

> Soft Canvas Typography

## Description

PamPam uses a bright, inviting canvas with clean, minimalist typography and subtle accents. The interface prioritizes clarity and a light, spacious feel, with elements appearing on a slightly off-white background. The design is subtly playful yet functional, using rounded corners and muted chromatic touches for interactive elements and brand differentiation. Overall, the visual style supports a product that is approachable and easy to use.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card and component surfaces in some contexts, text on darker backgrounds |
| Buttermilk | #faf2ec | neutral | Primary background for the application, secondary card and component surfaces |
| Ash Gray | #e5e5e5 | neutral | Subtle background for UI elements, dividers, or very light borders |
| Ink Black | #000000 | neutral | Primary text for headings and body, accent for outlining non-primary buttons and inputs |
| Charcoal | #1b1917 | neutral | Main heading text color, providing strong contrast against light backgrounds |
| Cool Gray | #8f8f8f | neutral | Muted secondary text, helper text, and subtle interface elements |
| Slate Blue | #9894a8 | neutral | Muted interactive text, outlined button borders for secondary actions, and placeholder-like text |
| Field Green | #2b3ea7 | accent | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| -apple-system | system-ui | 400, 500, 600 | 16px, 18px, 24px | 1.00, 1.20, 1.56 | Body text, navigation links, and some button labels. Provides universal readability. |
| inter | Inter | 400, 550 | 14px, 16px, 18px, 19px | 1.43, 1.47, 1.50, 1.56 | Utility text, small labels, and input fields. Enhances legibility at smaller sizes. |
| nineties | Playfair Display | 400 | 28px, 48px, 80px | 1.08 | Display headlines and prominent titles. Its unique character defines the brand's typographic voice. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.43 |  |
| body | 16 | 1.56 |  |
| subheading | 18 | 1.5 |  |
| heading | 28 | 1.08 |  |
| heading-lg | 48 | 1.08 |  |
| display | 80 | 1.08 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "buttons": "16px",
    "general": "20px"
  },
  "elementGap": "12px",
  "sectionGap": "64px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Standard Button

**Role:** Primary interaction button

Buttermilk background (#faf2ec) with Ink Black text (#000000) and a 16px border-radius. Padding is 16px all around.

### Outlined Muted Button

**Role:** Secondary interaction or ghost button

Transparent background with Slate Blue text (#9894a8) and a Slate Blue border (#9894a8), 0px border-radius. Padding is 8px vertical, 12px horizontal.

### Feature Card

**Role:** Content container for features or examples

Buttermilk background (#faf2ec) with 12px border-radius and no shadow or border. Content inside has no additional padding.

### Standard Input Field

**Role:** Form input elements

Transparent background with Charcoal text (#222222) and Charcoal border (#222222). Padding is 8px vertical.

## Do's

- Use Buttermilk (#faf2ec) as the default background for most content sections and cards to maintain visual lightness.
- Apply a 12px border-radius to all cards and images for a consistent soft-edged aesthetic.
- Reserve the 'nineties' font for display-level headlines (48px, 80px) using Charcoal (#1b1917) for strong visual impact.
- Utilize Ink Black (#000000) for primary body text and as a strong border color for key interactive elements.
- Maintain comfortable density by using 12px for `elementGap` between most UI components.
- Prioritize the `Standard Button` with a Buttermilk (#faf2ec) background and Ink Black (#000000) text for main calls to action.
- Employ Slate Blue (#9894a8) for subtle interactive text and outlined button borders for less prominent actions immediately adjacent to content.

## Don'ts

- Avoid using harsh, saturated colors as primary backgrounds; adhere to the neutral palette for canvas and surfaces.
- Do not deviate from the specified border-radius values (e.g., 12px for cards, 16px for buttons) to preserve the design's rounded character.
- Refrain from using the 'nineties' font for body copy or small text, as it is intended for display purposes only.
- Do not introduce strong, intrusive shadows; existing shadows are subtle and provide minimal depth.
- Avoid excessive use of outlines; apply the `Outlined Muted Button` sparingly for secondary actions.
- Do not reduce content padding within cards; maintain the spacious feel with the default 12px card padding.
- Resist using bold font weights for body text; rely on the '-apple-system' and 'inter' fonts at their specified weights for readability.

## Elevation

| Element | Style |
| --- | --- |
| Card/Interactive Element | rgba(0, 0, 0, 0.08) 0px 0px 0px 1px, rgba(0, 0, 0, 0.1) 0px 1px 4px 0px |
| Accent Element (Inset) | rgba(0, 0, 0, 0.3) 0px 1px 2px 0px, rgb(99, 135, 244) 0px 2px 0px 0px inset |
| Minor Element | rgba(0, 0, 0, 0.1) 0px 1px 3px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Clean white interface, soft curves, and a focus on product screenshots within the UI. |
| Notion | Minimalist aesthetic with high contrast text, comfortable spacing, and soft neutral palettes supporting content. |
| Linear | Emphasis on crisp typography and subtle use of accent colors to denote interactivity over heavy branding. |
| Webflow | Product-focused design, use of rounded cards, and a balance of clear text with illustrative visuals. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1b1917
background: #faf2ec
border: #000000 (for strong outlines), #9894a8 (for muted outlines)
accent: #2b3ea7
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
2. Design a feature card: Buttermilk background (#faf2ec), 12px border-radius, no shadow, no internal padding. Content elements inside should use 'inter' font at 16px with normal letter-spacing.
3. Make a secondary action button with a muted style: Transparent background, Slate Blue text (#9894a8), Slate Blue border (#9894a8), 0px border-radius, 8px vertical padding, 12px horizontal padding. Font '-apple-system' weight 400, 16px.
4. Produce an input field: Transparent background, Charcoal text (#222222), Charcoal border (#222222), 8px vertical padding. Font 'inter' weight 400, 16px with normal letter-spacing.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509804014-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509804014-thumb.jpg |
