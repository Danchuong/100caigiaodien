# ARKET — Refero Style

- Refero URL: https://styles.refero.design/style/3c605c8e-daf2-4d46-94d7-2cb705a93b7b
- Site URL: https://arket.com
- ID: 3c605c8e-daf2-4d46-94d7-2cb705a93b7b
- Theme: light
- Industry: ecommerce
- Created: 2026-03-20T15:41:00.000Z
- Ranks: newest: 1016, popular: 360, trending: 663

> Editorial Minimal Canvas — Think high-contrast type on stark white pages, framed by precise, almost invisible borders, allowing rich product photography to dominate.

## Description

This design system presents an authoritative, understated retail experience, reminiscent of a high-end editorial magazine. A monochromatic palette with a subtle emphasis on crisp typography, particularly the distinct arketSansMono, defines its core. The sparing use of an inline link blue and subtle green for indicators provides functional accents without disrupting the minimal aesthetic. Element interactions are often border-based or purely typographical, favoring a quiet visual presence over ornate decoration.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, elevated surfaces like cards, modal backgrounds, primary button backgrounds. |
| Ink Black | #000000 | neutral | Primary text, headings, icon fill, borders on interactive elements, provides strong contrast against white. |
| Ash Gray | #e0e0e0 | neutral | Subtle borders, dividers, outlines for inactive elements, providing visual separation without harshness. |
| Soft Graphite | #666666 | neutral | Placeholder text in input fields, secondary information, muted text on light backgrounds. |
| Hint of Gray | #eaeae8 | neutral | Subtle border color for non-primary buttons, providing a barely-there outline. |
| Body Text Gray | #767676 | neutral | Secondary text colors, less prominent information, maintaining a subdued tone. |
| Command Blue | #3860be | accent | Interactive link text, inline calls to action, drawing attention to clickable elements without being overly bright. |
| Success Green | #38793f | semantic | Indicator icons for success states, subtle confirmation messages. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| arketSansMono | IBM Plex Mono | 400 | 10px, 12px, 16px, 22px, 28px | 1.21, 1.27, 1.38, 1.50, 1.88 | All primary text elements including body copy, navigation, buttons, and most headings — its uniform width lends a technical, precise character to all content. |
| Arket Sans | Inter | 400 | 10px, 13px, 16px, 18px, 24px | 1.23, 1.50 | Secondary text uses, providing a more conventional sans-serif feel for subtext or specific links. |
| arketSCSansMono | IBM Plex Mono (short caps variant) | 400 | 10px, 12px, 16px | 1.00, 1.38, 1.50 | Specific utility text or small labels, where a distinct slightly condensed, precisely tracked monospace feel is desired. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.21 |  |
| body | 16 | 1.38 |  |
| subheading | 18 | 1.5 |  |
| heading | 22 | 1.5 |  |
| display | 28 | 1.88 |  |

## Spacing & Shape

```json
{
  "radius": {
    "inputs": "4px",
    "buttons": "2px",
    "general": "0px"
  },
  "elementGap": "8px",
  "sectionGap": "80-128px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Membership Callout Modal



### Announcement Banner



### Editorial Article Cards



### Primary Ghost Button

**Role:** Navigation links, inline actions

Transparent background, Ink Black text, no borders or padding (like text links). `backgroundColor: rgba(0, 0, 0, 0)`, `color: #000000`, `borderRadius: 0px`.

### Subtle Outlined Button

**Role:** Secondary actions, filtering

Transparent background, Ink Black text, with a subtle Hint of Gray border. `backgroundColor: rgba(0, 0, 0, 0)`, `color: #000000`, `borderTopColor: #eaeae8`, `borderRadius: 2px`, `padding: 0px 8px`.

### Filled Square Button

**Role:** Primary calls to action with specific borders

Canvas White background, Ink Black text, with an Ink Black border. `backgroundColor: #ffffff`, `color: #000000`, `borderTopColor: #000000`, `borderRadius: 0px`, `padding: 10px`.

### Filled Rounded Button

**Role:** Standard calls to action

Canvas White background, Ink Black text, no border. `backgroundColor: #ffffff`, `color: #000000`, `borderRadius: 2px`, `padding: 10px 16px`.

### Product Card

**Role:** Displaying product listings, editorial content

Transparent background, no border radius or shadow. `backgroundColor: rgba(0, 0, 0, 0)`, `borderRadius: 0px`, `boxShadow: none`, `padding: 0px`.

### Callout Modal

**Role:** Promotional pop-ups, membership offers

Canvas White background with subtle elevation shadow, containing dense text blocks. `backgroundColor: #ffffff`, `boxShadow: rgba(0, 0, 0, 0.1) 0px 2px 10px 2px`.

## Do's

- Prioritize arketSansMono (IBM Plex Mono) for almost all textual content to maintain brand consistency.
- Use Canvas White (#ffffff) as the dominant background color for all main content areas and modals.
- Implement Ink Black (#000000) for all primary text, headings, and interactive element borders for optimal contrast.
- Apply 2px border radius for buttons and 4px for input fields; almost all other elements should use 0px radius.
- Utilize 0px padding and 0px border radius for card-like elements to promote a clean, unframed aesthetic.
- Maintain comfortable element spacing, defaulting to 8px for internal element gaps and up to 16px for larger component separations.
- Employ Command Blue (#3860be) exclusively for navigation links and direct calls to action within text.

## Don'ts

- Avoid using highly saturated colors; confine chromatic accents to Command Blue (#3860be) and Success Green (#38793f) for specific functional purposes.
- Do not introduce complex shadows; stick to the single `rgba(0, 0, 0, 0.1) 0px 2px 10px 2px` for elevated containers.
- Refrain from using varied border radii across elements; adhere strictly to 0px, 2px, or 4px.
- Do not deviate from the established font families; custom typefaces are a core part of the brand identity.
- Avoid decorative background patterns or strong gradients; the design relies on clean, solid surfaces.
- Do not use generic system default link colors; all links must be styled with Command Blue (#3860be) or Ink Black (#000000) for ghost buttons.

## Layout

The page adheres to a max-width contained layout rather than full-bleed, centering content to provide clear margins. The hero section often features large photography with minimal overlay text, setting a serene mood. Sections generally maintain consistent vertical spacing between 80px and 128px, fostering a spacious rhythm. Content arrangement frequently alternates between large images and text blocks, sometimes in two-column layouts. Feature sections can employ grid-based layouts for editorial cards. Navigation is a persistent top bar, with key navigational elements and search. Density is comfortable, with ample breathing room between elements.

## Imagery

The site heavily features high-quality, editorial lifestyle photography with a muted, natural aesthetic. Images are predominantly full-bleed or large, contained within the content flow without masks, sharp edges. They serve both decorative atmosphere and product showcasing roles, being central to the content rather than supplementary. Object-focused photography, like the denim shot, is common, presenting items in a raw, authentic manner. Product photography often integrates models within realistic settings, capturing candid moments. Iconography is minimalist, outlined, and monochromatic, primarily using Ink Black.

## Elevation

| Element | Style |
| --- | --- |
| Callout Modal | rgba(0, 0, 0, 0.1) 0px 2px 10px 2px |

## Similar Brands

| Business | Why |
| --- | --- |
| COS | Shares a similar high-fashion, minimalist aesthetic with clean photography and a focus on high-contrast black and white typography. |
| ARKET (sister brand) | This is ARKET. The design language is consistent with their overall brand identity. |
| Filippa K | Employs comparable editorial-style imagery, a restrained color palette, and elegant typography to convey a premium, understated feel. |
| Acne Studios | Features strong, precise typography and a largely monochromatic visual identity, allowing the product and editorial content to stand out. |
| Mr Porter | Offers an editorial-heavy e-commerce experience with clean layouts and a focus on high-quality photography, using typography to reinforce brand authority. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- Text: #000000
- Background: #ffffff
- CTA (text): #3860be
- Border (subtle): #eaeae8
- Accent (success): #38793f

Example Component Prompts:
1. Create a Callout Modal: background #ffffff, with headline 'Te damos la bienvenida al programa de membresía' using arketSansMono 400 at 22px, color #000000, line-height 1.27. Body text 'Obtener un 10% de descuento...' using arketSansMono 400 at 16px, color #000000, line-height 1.38. Button 'Hacerse miembro' is Filled Square Button with background #ffffff, color #000000, border-color #000000, padding 10px. Apply elevation shadow `rgba(0, 0, 0, 0.1) 0px 2px 10px 2px`.
2. Design a navigation bar with 'Mujer', 'Hombre', 'Niños', 'Home' as Primary Ghost Buttons at arketSansMono 400, 16px, color #000000. The search input uses Input Search Field styling (background #f9f9f9, color rgba(0, 0, 0, 0.6), border-color rgba(0, 0, 0, 0.6), border-radius 4px, padding 0px 48px 0px 44px).
3. Generate a Product Card with a transparent background, 0px border radius, and no box-shadow. Inside, place an image, and below it, a heading 'Oskar Eriksson' with arketSansMono 400 at 22px, color #000000. Following text 'Entrevistas' with arketSansMono 400 at 12px, color #000000, line-height 1.27.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932941371-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932941371-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3c605c8e-daf2-4d46-94d7-2cb705a93b7b-1777583959667-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3c605c8e-daf2-4d46-94d7-2cb705a93b7b-1777583959667-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3c605c8e-daf2-4d46-94d7-2cb705a93b7b-1777583959667-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/3c605c8e-daf2-4d46-94d7-2cb705a93b7b-1777583959667-preview-detail-poster.jpg |
